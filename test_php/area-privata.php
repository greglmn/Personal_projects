<?php

session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){ 
    header("location: login.html");
    exit;
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Priv</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Area Privata</h2>

<?php

echo  "ciao " . $_SESSION["username"];

?>
</body>
</html>