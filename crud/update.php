<?php
include "./connect.php";
//dados enviados do update-page
$idGet = $_POST['id'];
$nome = $_POST['nome'];
$uni = $_POST['universo'];
//Query para atualizar
mysqli_query($connect,"update herois set nome = '$nome', universo = '$uni' where id = $idGet");

//Pagina de destino depois da execução query
header("location:../index.php");
?>