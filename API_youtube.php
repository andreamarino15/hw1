<?php

// Imposto l'header della risposta
header('Content-Type: application/json');

youtube(); // richiamo la mia funzione youtube che fa tutta la logica di interazione con l'API;

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

function youtube()
{
    $key = 'AIzaSyDA1MqSKvbw-eun863IUN--9kO5z45rNt0'; // chiave per API: AIzaSyDA1MqSKvbw-eun863IUN--9kO5z45rNt0
    $playlistID = 'UU8i2VloWFKMugidh9rCUAoA'; // id del canale UU8i2VloWFKMugidh9rCUAoA

    $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=$playlistID&key=$key"; // endpoint +id +key


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