<?php
    include 'dati_db.php';

    // Distruggo la sessione esistente
    session_start();
    session_destroy();

    header('Location: index.php');
?>