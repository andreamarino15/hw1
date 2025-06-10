<?php
    require_once 'dati_db.php'; // dati di connessione al db per non avere troppi require_once
    session_start(); // si crea o si riprende una sessione esistente (vuota o piena)

    // Questa funzione verifica se l'utente è autenticato attraverso il controllo di due variabili se sono presenti nella sessione
    function checkSession(){
        if(isset($_SESSION['_agora_user_id']) && isset ($_SESSION['_agora_username'])){
            return $_SESSION['_agora_user_id']; // se entrambe sono presenti, la funzione restituisce l'id dell'utente (considera dunque l'utente autenticato)
        } else {
            return false; //se manca una delle due variabili, restituisce false (utente non autenticato o sessione scaduta)
        }
    }
?>