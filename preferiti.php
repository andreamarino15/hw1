<?php

require_once 'check_session.php';

if (!checkSession()) {
    header("Location: login.php");
}

header('Content-Type: application/json'); // Imposta il content type a JSON

//connessione al database
$conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']) or die(json_encode(["ok" => false, "error" => "Errore di connessione DB"]));

// Pulizia e sanitizzazione
$user_id = checkSession(); // Assumo che l'ID utente sia in sessione
$action = $_POST['action'] ?? ''; // Utilizziamo il campo action per indicare al server che tipo di operazione vogliamo eseguire (ad esempio: aggiungere un preferito, cancellarne uno o recuperare la lista).
// Invece di creare tanti file PHP diversi (add_preferito.php, delete_preferito.php, get_preferiti.php), abbiamo un solo file (preferiti.php) che, in base al valore di action, decide cosa fare.

if ($action === 'add') {
    $main_image = mysqli_real_escape_string($conn, $_POST['main_image']);
    $titolo = mysqli_real_escape_string($conn, $_POST['titolo']);
    $prezzo = mysqli_real_escape_string($conn, $_POST['prezzo']);

    // Decodifica le varianti JSON
    $varianti = json_decode($_POST['varianti'], true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(["ok" => false, "error" => "Errore di connessione DB"]);
        exit;
    }

    // Converti le varianti in JSON per il salvataggio
    $varianti_json = mysqli_real_escape_string($conn, json_encode($varianti));

    // Verifica se il prodotto è già nei preferiti
    $check_query = "SELECT id FROM preferiti WHERE user_id = '$user_id' AND titolo = '$titolo' AND main_image = '$main_image'"; // ogni user può avere la sua lista dei preferiti in questo modo
    $check_res = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_res) > 0) {
        http_response_code(409);
        echo json_encode(["ok" => false, "error" => "Errore di connessione DB"]);
        exit;
    }

    // Query per l'inserimento
    $query = "INSERT INTO preferiti (user_id, titolo, main_image, prezzo, varianti) VALUES ('$user_id', '$titolo', '$main_image', '$prezzo', '$varianti_json')";

    // Esecuzione
    $res = mysqli_query($conn, $query);

    if (!$res) {
        http_response_code(500);
        echo json_encode(["ok" => false, "error" => "Errore durante l'inserimento"]);
        exit;
    }

    echo json_encode([
        "ok" => true,
        "message" => "Prodotto salvato nei preferiti"
    ]);
} else if($action === 'get'){
    
    $query = "SELECT id, titolo, main_image, prezzo, varianti FROM preferiti WHERE user_id = '$user_id'";
    $res = mysqli_query($conn, $query);

    if (!$res) {
        http_response_code(500);
        echo json_encode(["ok" => false, "error" => "Errore durante il recupero preferiti"]);
        exit;
    }

    $preferiti = [];
    while ($row = mysqli_fetch_assoc($res)) {
        // Decodifica varianti per inviare come oggetto JS
        $row['varianti'] = json_decode($row['varianti'], true);
        $preferiti[] = $row;
    }

    echo json_encode(["ok" => true, "preferiti" => $preferiti]);
    exit;

} else if($action === 'delete'){
    $id = intval($_POST['id'] ?? 0);

    if ($id <= 0) {
        http_response_code(400);
        echo json_encode(["ok" => false, "error" => "ID preferito non valido"]);
        exit;
    }

    // Controlla che il preferito appartenga all'utente
    $check_query = "SELECT id FROM preferiti WHERE id = $id AND user_id = '$user_id'";
    $check_res = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_res) === 0) {
        http_response_code(403);
        echo json_encode(["ok" => false, "error" => "Accesso negato o preferito non trovato"]);
        exit;
    }

    // Elimina
    $delete_query = "DELETE FROM preferiti WHERE id = $id";
    $del_res = mysqli_query($conn, $delete_query);

    if (!$del_res) {
        http_response_code(500);
        echo json_encode(["ok" => false, "error" => "Errore durante l'eliminazione"]);
        exit;
    }

    echo json_encode(["ok" => true, "message" => "Preferito eliminato"]);
    exit;
}


mysqli_close($conn);

?>