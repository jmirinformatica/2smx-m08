<?php
// Aquest codi esborra la sessió i retorna al login
session_start();
session_destroy();
header('Location: login.php');
exit();
