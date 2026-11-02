<?php
session_start();

// Rimuove i dati della sessione.
$_SESSION = [];


session_destroy();

header('Location: login.php?logout=1');
exit;
