<?php
session_start();

function authHTML()
{
    // si no està autenticat, redirigeix cap al login.php
    if (empty($_SESSION['userlogin'])) {
        header('Location: login.php');
        exit();
    }
}

function isValidUser($user, $pass)
{
    //
    if ($user === 'admin' && $pass === 'admin') {
        return TRUE;
    }

    return FALSE;
}

function isValidUser($user, $pass) {
    // Dades de connexió a la base de dades
    $servername = "127.0.0.1";
    $username = "usuari-de-la-base-de-dades";
    $password = "password-de-l-usuari";
    $dbname = $username;

    // Es connecta a la base de dades
    $conn = new mysqli($servername, $username, $password, $dbname);
    // comprova que la connexió és correcte
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //creo la consulta SQL
    $sql = sprintf("SELECT id from usuaris_intranet 
        where usuari='%s' and password=SHA2('%s', 256)",
        $conn->escape_string($user),
        $conn->escape_string($pass)
    );
    //executo la consulta SQL
    $result = $conn->query($sql);

    //si tinc algun resultat, palante!
    if ($result->num_rows > 0) {
        return TRUE;
    } else {
        return FALSE; 
    }
    $conn->close();
}
