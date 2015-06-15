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
</div>


<div class="content">
	<div class="pan">
		<div class="ff">
			<?php
				$tmpl=mysql_query("select * FROM pesanan");
				$i=1;
				echo"
				<table>
				<tr>
				<td>ID</td>
				<td>yg di pesan</td>
				<td>nama</td>
				<td>alamat</td>
				<td>ukuran</td>
				<td>no HP</td>
				<td>jumlah pesanan</td>
				<td colspan='2'>keterangan</td>
				</tr>
				";	
				while($view=mysql_fetch_array($tmpl)){
					$a=$view['ID'];
					$b=$view['namakaos'];
					$c=$view['nama'];
					$d=$view['alamat'];
					$e=$view['ukuran'];
					$f=$view['nope'];
					$g=$view['jumlah'];
					
				echo"
				<tr>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$d</td>
				<td>$e</td>
				<td>$f</td>
				<td>$g</td>
				<td><a href='acc.php?id=$a'>ACCEPT</a></td>
				<td><a href='drop.php?id=$a'>DROP</a></td>
				</tr>
				";}
				echo"
				</table>";
			?>
		</div>
	</div>

</div>

<div class="footer">
copyright@2015 , Reseller Distro Anime


</div>

</body>
</html>
