<?php
require'connection/conexao.php';

$add     = $_POST['add'];

$previaT = $_POST['previaT'];
$url     = $_POST['url'];

if($add){
    $sql    = mysqli_query($con, "INSERT INTO admin (previaT, url) VALUES ('$previaT', '$url')");
    
    if($sql){
        echo "<script language='javascript' type='text/javascript'>alert('Alteração feita com sucesso!');window.location.href='podcast.php'</script>";  
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Houve algum problema na alteração...');window.location.href='podcast.php'</script>";  
    }
}