<center>
<?php
include 'konek.php';

$id=$_GET['id'];
mysql_query("delete from kaos where no=$id") or die("delete error");
header("location:data.php");
?>
