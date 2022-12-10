<?php
$host   = 'localhost';
$db     = ("pu");
$nome   = 'root';
$senha  = '';

$con    = mysqli_connect($host, $nome, $senha, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());	
}

?>