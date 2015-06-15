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
				$tmpl=mysql_query("select * FROM kaos");
				$i=1;
				echo"
				<table>
				<tr>
				<td>no</td>
				<td>nama</td>
				<td>bahan</td>
				<td>ukuran</td>
				<td>harga</td>
				<td>foto</td>
				<td>status</td>
				<td>keterangan</td>
				</tr>
				";	
				while($view=mysql_fetch_array($tmpl)){
					$a=$view['no'];
					$b=$view['nama'];
					$c=$view['bahan'];
					$d=$view['ukuran'];
					$e=$view['harga'];
					$f=$view['foto'];
					$g=$view['status'];
					
				echo"
				<tr>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$d</td>
				<td>$e</td>
				<td>$f</td>
				<td>$g</td>
				<td><a href='delet.php?id=$a'>HAPUS</a></td>
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
