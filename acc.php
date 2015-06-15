<?php
include 'konek.php';

$id=$_GET['id'];

$tmpl=mysql_query("select * FROM pesanan");
$view=mysql_fetch_array($tmpl);
					$a=$view['ID'];
					$b=$view['namakaos'];
					$c=$view['nama'];
					$d=$view['alamat'];
					$e=$view['ukuran'];
					$f=$view['nope'];
					$g=$view['jumlah'];
mysql_query("insert into acc value(NULL, '$b', '$c', '$d', '$e', '$g','$f')");
header('location:panel.php');
?>