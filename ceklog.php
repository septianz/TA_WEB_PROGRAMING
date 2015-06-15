<center><?php
session_start();
include 'konek.php';

$username=$_POST['user'];
$password=$_POST['pass'];

$q=mysql_query("select * from data where user='$username' and pass='$password'");
$row=mysql_fetch_array($q);
if($row['user']==$username and $row['pass']==$password){
$_SESSION['user']=$username;
header('location:panel.php');
}else{
header("location:wp-admin.php");
echo "GAGAL OM!!";
}

?>