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
<div class="subconttt">
	<?php
	
	$q=$_GET['id'];
	
	$p= mysql_query("select * FROM kaos WHERE nama='$q'") or die ("select error");
	
	$row= mysql_fetch_array($p);
	$a=$row['no'];
	$b=$row['nama'];
	$c=$row['bahan'];
	$d=$row['ukuran'];
	$e=$row['harga'];
	$f=$row['foto'];
	$g=$row['status'];
	Echo"<h2><center>$b</center></h2>";
	Echo"
	<center>
		<div class='kaos1'>
			<table>
				<tr>
				<td width='500px'><img src='img/$f' width='450px' height='450px' ></td>
				<td>Keterangan:<br>Bahan	: $c <br>Ukuran	: $d <br>Harga	:Rp.$e <br>Status	:$g </td>
				</tr>
				<tr>
				<td><h4><center><a href='ready.php'>Batal</a></center></h4></td>
				<td><h4><center><a href='pesanan.php?id=$b'>Pesan</a></center></h4></td>
				</tr>
			</table>
		</center>	
		";

		?> 
		

		
</div>

</div>

<div class="footer">
copyright@2015 , Reseller Distro Anime


</div>

</body>
</html>
