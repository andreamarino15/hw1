<?php

// Imposto l'header della risposta
header('Content-Type: application/json');

email(); // richiamo la mia funzione email che fa tutta la logica di interazione con l'API;

/*
Perché si definisce e poi si chiama la funzione?
La funzione youtube() è definita per incapsulare la logica di richiesta all’API YouTube, quindi tutto il codice che fa la chiamata cURL è dentro la funzione.
Definire una funzione significa dichiarare il blocco di codice ma non lo esegue subito.
Per eseguire quella logica, devi chiamare la funzione.
La chiamata youtube(); fa partire l'esecuzione della funzione e quindi:
Fa la richiesta all'API YouTube
Restituisce (echo) il risultato JSON che il client (browser) aspetta.

Se non la chiamassi, la funzione sarebbe definita ma mai eseguita, 
quindi il client riceverebbe una risposta vuota (nessun output JSON).
*/

function email()
{
    $key = '32b516ddd63147c48c9da218b638fcc5'; // chiave per API: 32b516ddd63147c48c9da218b638fcc5
    $endPoint_verify = 'https://emailvalidation.abstractapi.com/v1/';

    // Prendo l'email dalla query string
    if (!isset($_GET['email'])) {
        echo json_encode(['error' => 'Email non fornita']);
        exit;
    }

    $email = $_GET['email'];

    $url = "{$endPoint_verify}?api_key={$key}&email={$email}";


    // ACCESS TOKEN
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);

    // Ti restituisce la risposta (es. un JSON da un'API) come stringa che puoi salvare in una variabile
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // eseguo la richiesta
    $result = curl_exec($curl);

    // Controllo errori
    if (curl_errno($curl)) {
        echo json_encode(['error' => curl_error($curl)]);
    } else {
        echo $result; // restituisco il JSON ricevuto
    }

    curl_close($curl);
}

?>