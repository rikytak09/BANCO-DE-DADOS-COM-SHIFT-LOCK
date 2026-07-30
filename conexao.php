<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cine";

$conn + new mysqli($host, $usuario, $senha, $banco);

if($conn->connect_error){
 die("FATAL ERROR:". $conn->connect_error);
}
?>
