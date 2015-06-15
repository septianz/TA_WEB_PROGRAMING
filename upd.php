<?php include "konek.php"; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<div class="header">
	<div class="subhed">
	AnimDistro
	</div>
<div class="menu">
			<ul div="nav">
			<li><a href="#">HOME</a></li>
			<li><a href="#">PROFIL</a></li>
			<li><a href="produk.php">PRODUCT</a>
			<li><a href="#">CONTACT US</a></li>
		</ul>
	</div>
</div>
<div class="content">
<div class="subcontttt">
	<?php
	
	$q=$_GET['id'];
	
	$p=mysql_query("select * FROM pesanan WHERE ID='$q'") or die ("select error");
	
	$row= mysql_fetch_array($p);
	$i=$row['ID'];
	$a=$row['namakaos'];
	$b=$row['nama'];
	$c=$row['alamat'];
	$d=$row['ukuran'];
	$e=$row['jumlah'];
	$f=$row['nope'];
	Echo"<h2><center>$i. $a</center></h2>";
	Echo"
	<center>
		<div class='kaos2'>
			<table>
			<form method='post' action='upd_sv.php?id=$i'>
			<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type='text' name='nama' value='$b'/></td>
			</tr>
			<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type='text' name='alamat' value='$c'/></td>
			</tr>
			<td>No HP</td>
			<td>:</td>
			<td><input type='text' name='nope' value='$f'/></td>
			</tr>
			<tr>
			<td>Size</td>
			<td>:</td>
			<td><input type='text' name='ukuran' value='$d'/></td>
			</tr>
			<td>Jumlah</td>
			<td>:</td>
			<td><input type='text' name=jumlah' value='$e'/></td>
			</tr>
			<td><a href='cek.php'>Batal</a></td>
			<td colspan='2'><input type='submit' name='submit' value='selesai'/></td>
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
