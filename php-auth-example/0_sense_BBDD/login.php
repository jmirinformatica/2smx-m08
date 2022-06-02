<?php
require_once 'auth.php';

// Comprova que l'usuari introdït al formulari és correcte
// i en cas afirmatiu et porta a index.php
if (!empty($_POST['userlogin']) && !empty($_POST['pass'])) {
    // Verifica l'usuari i el password
    if (isValidUser($_POST['userlogin'], $_POST['pass'])) {
        // Correcte!
        $_SESSION['userlogin'] = $_POST['userlogin'];
        header('Location: index.php');
        exit();
    }
    else
    {
        $_SESSION['userlogin'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Intranet</title>
</head>
<body>
    <h1>Intranet</h1>
    <form method="POST" action="login.php">
        <p><input type="text" placeholder="login" name="userlogin"></p>
        <p><input type="password" placeholder="password" name="pass"></p>
        <p><input type="submit" value="LOGIN"></p>
    </form>
</body>
</html>
