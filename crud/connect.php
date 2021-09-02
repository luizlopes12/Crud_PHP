<?php

$connect = mysqli_connect("localhost","id17487737_luiz1112","QbjYSLx2ikxpGY#");   //Selecionando o usuario do banco e o ip
           mysqli_select_db($connect,"id17487737_webdbherois");            //seleionando o nome do banco
           mysqli_set_charset($connect,"UTF8");         //Tipos de caracteres
if(!$connect){
    echo "<script>alert('Banco não conectado')</script>";
}

?>