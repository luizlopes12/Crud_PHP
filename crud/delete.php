<?php
include("connect.php");

$idGet = $_GET["id"];

mysqli_query($connect,"delete from herois where id = $idGet");

header("location:../index.php");

?>