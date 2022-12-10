<?php
require 'connection/conexao.php';

session_start();

if(isset($_SESSION['admin'])){
    include("podcast1.php");
}else{
    include("podcast0.php");
}