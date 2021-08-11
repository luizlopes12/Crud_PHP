<?php
include "./connect.php";
//$id = $_POST['id'];
$idGet = $_POST['id'];
$nome = $_POST['nome'];
$uni = $_POST['universo'];
mysqli_query($connect,"update herois set nome = '$nome', universo = '$uni', img = '$nome.jpg' where id = $idGet");

header("location:../index.php");

?>