<?php
require 'connection/conexao.php';

session_start();

if(isset($_SESSION['admin'])){
    include("contato1.php");
}else{
    include("contato0.php");
}