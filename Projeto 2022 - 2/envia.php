<?php
require 'connection/conexao.php';

$nome       = $_POST['nome'];
$telefone   = $_POST['telefone'];
$email      = $_POST['email'];
$mensagem   = $_POST['mensagem'];

// Validação do usuário/senha digitados
$sql = mysqli_query($con, "SELECT * FROM admin WHERE nome = '$nome' and telefone = '$telefone' and email = '$email' and mensagem = '$mensagem'");

if (mysqli_num_rows($sql) == 0) {
    echo "<script language='javascript' type='text/javascript'>alert('Sua mensagem foi enviada. Deus lhe abençoe!');window.location.href='contato.php'</script>";  
} else {
    $resultado = mysqli_fetch_assoc($sql);

    if (!isset($_SESSION)) session_start();
    $_SESSION["admin"]  = 'admin';
    header("Location: contato.php");
    exit;
}
 ?>