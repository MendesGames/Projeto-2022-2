<?php
require 'connection/conexao.php';

session_start();

if(isset($_SESSION['admin'])){
    include("noticias1.php");
}else{
    include("noticias0.php");
}