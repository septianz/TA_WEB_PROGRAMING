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
			<li><a href="panel.php">Pemesan</a></li>
			<li><a href="pacc.php">Pesanan Acc</a></li>
			<li><a href="input.php">Input Kaos</a></li>
			<li><a href="data.php">Data Kaos</a></li>
		</ul>
</div>
<div class="content">
<div class="subcontttt">

	<center>
		<div class='kaos2'>
			<table>
			<form method='post' action='input_sv.php'>
			<tr>
			<td>Nama kaos</td>
			<td>:</td>
			<td><input type='text' name='kaos' /></td>
			</tr>
			<tr>
			<td>Bahan kaos</td>
			<td>:</td>
			<td><input type='text' name='bahan' /></td>
			</tr>
			<tr>
			<td>ukuran</td>
			<td>:</td>
			<td><input type='text' name='ukuran' /></td>
			</tr>
			<tr>
			<td>harga</td>
			<td>:</td>
			<td><input type='text' name='harga' /></td>
			</tr>
			<tr>
			<td>foto</td>
			<td>:</td>
			<td><input type='text' name='foto' /></td>
			</tr>
			<tr>
			<td>status</td>
			<td>:</td>
			<td><input type='text' name='status' /></td>
			</tr>
			
			<td><a href='panel.php'>Batal</a></td>
			<td colspan='2'><input type='submit' name='submit' value='SIMPAN'/></td>
			</tr>
			</form>
			</table>
		</div>
		

		
</div>

</div>

<div class="footer">
copyright@2015 , Reseller Distro Anime


</div>

</body>
</html>
