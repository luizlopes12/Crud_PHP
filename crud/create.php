<?php
//Arquivo de conexão
include "connect.php";
//Valores dos inputs do create-page
$nome = $_POST["nome"];
$uni = $_POST["universo"];
$img = $_FILES["arquivo"];
//Query para inserir 
for ($k = 0; $k < count($img['name']); $k++){
    $random = md5((date('s')*rand(0,100000))*$img['size'][$k]);
    $ex = pathinfo($img['name'][$k], PATHINFO_EXTENSION);
    $randName = $random . "." . $ex;
    move_uploaded_file($img['tmp_name'][$k], "../arquivos/".$randName);
    mysqli_query($connect,"insert into herois(nome, universo, img) values ('$nome','$uni','$randName')");
}
//Pagina de destino depois da execução query
header("location:create-page.php");
?>
