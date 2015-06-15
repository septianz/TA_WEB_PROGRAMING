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
	
	$p= mysql_query("select * FROM kaos WHERE nama='$q'") or die ("select error");
	
	$row= mysql_fetch_array($p);
	$a=$row['no'];
	$b=$row['nama'];
	Echo"<h2><center>$b</center></h2>";
	Echo"
	<center>
		<div class='kaos2'>
			<table>
			<form method='post' action='pes_sv.php?id=$b'>
			<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type='text' name='nama' placeholder='nama anda...'/></td>
			</tr>
			<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type='text' name='alamat' placeholder='alamat anda...'/></td>
			</tr>
			<td>No HP</td>
			<td>:</td>
			<td><input type='text' name='nope' placeholder='nohp...'/></td>
			</tr>
			<tr>
			<td>Size</td>
			<td>:</td>
			<td><input type='text' name='ukuran' placeholder='Size...'/></td>
			</tr>
			<td>Jumlah</td>
			<td>:</td>
			<td><input type='text' name='jumlah' placeholder='jumlah pesanan...'/></td>
			</tr>
			<td><a href='ready.php'>Batal</a></td>
			<td colspan='2'><input type='submit' name='submit' value='PESAN'/></td>
			</tr>
			</form>
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
