<?php

$connect = mysqli_connect("127.0.0.1","root","1112");
           mysqli_select_db($connect,"web");
           mysqli_set_charset($connect,"UTF8");

if(!$connect){
    echo "<script>alert('Banco não conectado')</script>";
}

?>