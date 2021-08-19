<?php
//conexao
include("connect.php");
//Id do heroi enviado da pagina rprincipal
$idGet = $_GET["id"];
//Query de delete selecionando pelo id
mysqli_query($connect,"delete from herois where id = $idGet");
//Pagina de destino depois da execução query
header("location:../index.php");
?>