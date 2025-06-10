<?php
// array associativo che contiene i dati di configurazione per la connessione al database
    $dati_db = [
        'host'     => '127.0.0.1',
        'name'     => 'hw1',
        'user'     => 'root',
        'password' => ''
    ];

    /*
    Questo array viene poi **incluso** da altri script (come quello del login e sign up) 
    tramite `require_once 'dati_db.php'`, per avere accesso ai dati di connessione centralizzati. Ad esempio:

    $conn = new mysqli($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    */
?>