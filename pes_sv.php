<?php
include "konek.php";

$a=$_GET['id'];
$b=$_POST['nama'];
$c=$_POST['alamat'];
$d=$_POST['nope'];
$e=$_POST['ukuran'];
$f=$_POST['jumlah'];

mysql_query("INSERT INTO pesanan VALUE (NULL, '$a','$b','$c','$e','$f','$d')");
header("Location:cek.php?id=$b");
