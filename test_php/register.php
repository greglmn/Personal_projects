<?php

require_once('config.php');

$email = $connessione->real_escape_string($_POST['email']);
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// Controlla se l'email esiste già nel database
$query = "SELECT * FROM utenti WHERE email = '$email'";
$result = $connessione->query($query);

if ($result->num_rows > 0) {
    echo "L'email esiste già nel database. Si prega di utilizzare un'altra email.";
} else {
    // L'email non esiste nel database, procedi con la creazione dell'account


$passwordMatchError = '';

if(isset($_POST['password']) && isset($_POST['password1'])) {
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

    if($password === $password1) {
        // Passwords match, proceed with account creation
        $sql = "INSERT INTO utenti (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

        if ($connessione->query($sql) === true) {
            // Registrazione avvenuta con successo, reindirizza l'utente alla pagina desiderata
            header("Location: login.html");
            exit();
            
        } else {
            echo "Errore durante la registrazione utente: " . $connessione->error;
        }
    } else {
        $passwordMatchError = 'Le password non corrispondono.';
    }
}

if ($passwordMatchError !== '') {
    echo $passwordMatchError;
}

}

$connessione->close();

?>
