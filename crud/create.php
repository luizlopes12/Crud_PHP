<?php
//Arquivo de conexão
include "connect.php";
//Valores dos inputs do create-page
$nome = $_POST["nome"];
$uni = $_POST["universo"];
/* talvez usar essa confirmação pra não mandar dados nulos
if(strlen($nome) > 0 && strlen($uni) > 0 ){
    //Query
    mysqli_query($connect, "insert into herois(nome, universo, img) values ('$nome','$uni', '$nome.jpg')");
}
*/
//Query para inserir 
mysqli_query($connect, "insert into herois(nome, universo, img) values ('$nome','$uni', '$nome.jpg')");

//Pagina de destino depois da execução query
header("location:create-page.php");
?>
