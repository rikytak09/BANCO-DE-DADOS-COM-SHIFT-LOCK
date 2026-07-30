<?php
include("conexao.php");

$sql = "SELECT * FROM filmes";
$resultado = $conn->query($sql);

while($filme = $resultado->fecth_assoc()){
 echo $filme['titulo'];
}
