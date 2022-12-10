<?php
require'connection/conexao.php';

$salvar  = $_POST['salvar1'];

$previaT = $_POST['previaT'];
$url     = $_POST['url'];

if($salvar){
    $sql    = mysqli_query($con, "INSERT INTO admin (previaT, url) VALUES ('$previaT', '$url')");
    
    if($sql){
        echo "<script language='javascript' type='text/javascript'>alert('Alteração feita com sucesso!');window.location.href='podcast.php'</script>";  
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Houve algum problema na alteração...');window.location.href='podcast.php'</script>";  
    }
}