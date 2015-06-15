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
<div class="subcontttt">
	<?php
	
	$q=$_GET['id'];
	
	$p= mysql_query("select * FROM pesanan WHERE nama='$q'") or die ("select error");
	
	$row= mysql_fetch_array($p);
	$i=$row['ID'];
	$a=$row['namakaos'];
	$b=$row['nama'];
	$c=$row['alamat'];
	$d=$row['ukuran'];
	$e=$row['jumlah'];
	$f=$row['nope'];
	
	Echo"<h2><center>$b</center></h2>";
	Echo"
	<center>
		<div class='kaos2'>
			<table>
			<tr>
			<td>No.Pesanan</td>
			<td></td>
			<td>$i</td>
			</tr>
			<tr>
			<td>Kaos pesanan</td>
			<td>:</td>
			<td>$a</td>
			</tr>
			<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td>$b</td>
			</tr>
			<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>$c</td>
			</tr>
			<td>No HP</td>
			<td>:</td>
			<td>$f</td>
			</tr>
			<tr>
			<td>Size</td>
			<td>:</td>
			<td>$d</td>
			</tr>
			<td>Jumlah</td>
			<td>:</td>
			<td>$e</td>
			</tr>
			<tr>
			<td colspan='3'><br>Apakah data anda sudah benar?</td>
			</tr>
			<tr>
			<td><a href='upd.php?id=$i'>Belum</a></td>
			<td colspan='2'><a href='fix.php?id=$i'>Sudah</a></td>
			</tr>
			
			
			</table>
		</div>
		";

		?> 
		

		
</div>

</div>

<div class="footer">
copyright@2015 , Reseller Distro Anime

</div>

</body>
</html>
