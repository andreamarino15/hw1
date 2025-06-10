<?php
    require_once 'dati_db.php';

    if (!isset($_GET["search"])) { // controlla se è stato passato un parametro search via URL
        echo "Qualcosa è andato storto";
        exit;
    } // serve come sicurezza di base per evitare accessi diretti o usi non previsti dello script

    //apro la connessione col db
    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    
    $search = mysqli_real_escape_string($conn, $_GET["search"]);
    /*
    Quando prendi un valore direttamente dall’utente (in questo caso da $_GET["q"], 
    cioè dallo username passato via URL), potrebbe contenere caratteri pericolosi 
    che un utente malintenzionato può usare per modificare la query SQL.
    
    mysqli_real_escape_string() serve a difenderti dagli attacchi SQL injection, 
    pulendo i dati inseriti dall’utente prima di inserirli in una query SQL.
    */

    // preparo la query
    $query = "SELECT * FROM articoli WHERE nome LIKE '%$search%'"; // contiene la parola nel testo cercato

    // eseguo la query
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // innizializzo un array di eventi
    $articoli = array(); //Crea un array vuoto $articoli. 

    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
            $articoli[] = $row;
        } // Per ogni riga trovata dalla query, la salva dentro l’array (ogni row è un articolo con nome, immagine, prezzo)
        // risposta in formato JSON
        header('Content-Type: application/json');
        echo json_encode($articoli); // risponde con gli articoli dell'utente
    }else{
        $error = 'Errore nella query';
    }

    // chiudi
    mysqli_free_result($res);
    mysqli_close($conn);
?>