<?php

    require_once 'dati_db';

    if (!isset($_GET["q"])) { // controlla se è stato passato un parametro q via URL
        echo "Qualcosa è andato storto";
        exit;
    } // serve come sicurezza di base per evitare accessi diretti o usi non previsti dello script

    header('Content-Type: application/json'); // comunica che la risposta sarà in formato json

    // facciamo la connessione al DB
    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);

    $username = mysqli_real_escape_string($conn, $_GET["q"]);
    /*
    Quando prendi un valore direttamente dall’utente (in questo caso da $_GET["q"], 
    cioè dallo username passato via URL), potrebbe contenere caratteri pericolosi 
    che un utente malintenzionato può usare per modificare la query SQL.
    
    mysqli_real_escape_string() serve a difenderti dagli attacchi SQL injection, 
    pulendo i dati inseriti dall’utente prima di inserirli in una query SQL.
    */

    // preparo la query
    $query = "SELECT username FROM utente WHERE username = '$username'";

    // eseguo la query
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false)); //exists è la chiave e il valore è boolean
    /*Conta quante righe ha restituito la query con mysqli_num_rows($res):

    Se > 0: significa che lo username esiste già.
    Se 0: lo username è disponibile.
    */

    mysqli_close($conn); // chiusura della connessione col DB;

?>