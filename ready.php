<?php include "konek.php"; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<div class="header">
	<div class="subhed">
	<img src="img/heder.jpg" height="100px" width="450px"/>
	</div>
<div class="menu">
			<ul div="nav">
			<li><a href="home.php">HOME</a></li>
			<li><a href="produk.php">PRODUCT</a></li>
			<li><a href="cu.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
<div class="content">
<div class="subcont">
	<h2><center>Daftar produk ready stock</center></h2>
	<?php
	$tmpl=mysql_query("select * FROM kaos order by rand()");
	$i=1;
	while($view=mysql_fetch_array($tmpl)){
		$b = $view['nama'];
		$f = $view['foto'];
		echo"
		<center>
		<div class='kaos'>
			<form menthod='post' action='pesan.php'>
			<table>
			
				<tr>
				<td><h3><center><a href='pesan.php?id=$b'>$b</a></center></h3></td>
				</tr>
				<tr>
				<td><img src='img/$f' width='400px' height='400px' ></td>
				</tr>
			</form>
			</table>
		</center>	
			";
	} ?> 
		

		
</div>

</div>

<div class="footer">
copyright@2015 , Reseller Distro Anime

</div>

</body>
</html>
