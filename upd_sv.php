<?php
include "konek.php";

$i=$_GET['id'];
$b=$_POST['nama'];
$c=$_POST['alamat'];
$d=$_POST['nope'];
$e=$_POST['ukuran'];
$f=$_POST['jumlah'];

mysql_query("UPDATE pesanan SET nama='$b', alamat='$c', nope='$d', ukuran='$e', jumlah='$f' WHERE ID='$i'") or die('update error');
header("Location:cek.php?id=$b");
