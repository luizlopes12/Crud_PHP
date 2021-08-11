<?php
//Arquivo de conexão
include "connect.php";
//Valores dos inputs
$nome = $_POST["nome"];
$uni = $_POST["universo"];
//Query
mysqli_query($connect, "insert into herois(nome, universo, img) values ('$nome','$uni', '$nome.jpg')");
//Pagina de destino depois da execução query
header("location:create-page.php");
?>
