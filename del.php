<center>
<?php
include 'konek.php';

$id=$_GET['id'];
mysql_query("delete from admin where id=$id") or die("delete error");
header("location:read.php");
?>
