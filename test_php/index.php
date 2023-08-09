<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <form action="register.php" method="POST">
            <h2>Registrati</h2>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Inserisci la mail" required>
           
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Inserisci username" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Inserisci la password" required>
    
            <label for="password1">Conferma Password</label>
            <input type="password" name="password1" id="password1" placeholder="Conferma password" required>
    
            <input type="submit" value="Invia">
    
            <?php if (isset($error)) : ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
    
            <p>Hai già un account? <a href="login.html">Accedi</a></p>
        </form>
    </div>
</body>
</html>