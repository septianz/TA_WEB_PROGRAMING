<?php
include "konek.php";

$b=$_POST['kaos'];
$c=$_POST['bahan'];
$d=$_POST['ukuran'];
$e=$_POST['harga'];
$f=$_POST['foto'];
$g=$_POST['status'];

mysql_query("INSERT INTO kaos value(NULL, '$b', '$c', '$d', '$e', '$f', '$g')");
header("Location:input.php");
