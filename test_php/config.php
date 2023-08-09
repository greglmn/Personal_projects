<?php
    $host = "localhost";
    $user = "root";
    $password  = "root";
    $db = "tutorial_mysql";

    $connessione = new mysqli($host, $user, $password, $db);

    if ($connessione->connect_error) {
        die("Errore durante la connessione: " . $connessione->connect_error);
    }
?>
