<?php

$connect = mysqli_connect("127.0.0.1","root","1112");   //Selecionando o usuario do banco e o ip
           mysqli_select_db($connect,"web");            //seleionando o nome do banco
           mysqli_set_charset($connect,"UTF8");         //Tipos de caracteres
if(!$connect){
    echo "<script>alert('Banco não conectado')</script>";
}

?>