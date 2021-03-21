<?php

session_start();


$host = "localhost";
$user= "root";
$senha = "";
$bd = "forum";

global $conn;

$conn = mysqli_connect($host, $user, $senha, $bd) or die("Opss Deu Certo Mais Não acontece");

?>