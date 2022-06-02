<?php
// Codi PHP per a comprovar que l'usuari s'ha autenticat.
// S'ha d'afegir a totes les pàgines web que requereixen autenticació.
require_once 'auth.php';
authHTML();
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
    <p><a href="logout.php">Logout</a></p>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor esse sunt quasi? Tempora asperiores reiciendis, corrupti voluptates cum illo soluta quae suscipit enim repudiandae aspernatur unde, placeat, vitae laboriosam ab.
    </p>
    <p><img src="img/gat.jpg" alt="gat"></p>
</body>
</html>
