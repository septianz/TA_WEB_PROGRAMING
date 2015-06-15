<center>
<?php
include 'konek.php';

$id=$_GET['id'];
mysql_query("delete from pesanan where ID=$id") or die("delete error");
header("location:panel.php");
?>
