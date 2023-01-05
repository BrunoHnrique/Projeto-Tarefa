<?php 

$host = "localhost";
$db = "tarefas";
$user = "root";
$password = "";

$conn = new PDO ("mysql:host=$host;dbname=$db",$user,$password);

//Ativa modo de erro
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>