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
			<li><a href="produk.php">PRODUCT</a>
			<li><a href="cu.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
<div class="content">
<div class="subcontttt">
	<?php
	
	$i=$_GET['id'];
	
	$p=mysql_query("select * FROM pesanan WHERE id='$i'");
	
	$row= mysql_fetch_array($p);
	$b=$row['nama'];
	$c=$row['namakaos'];
	
	Echo"<p><center>Terimakasih , $b <br> telah memesan $c melalui layanan kami, tunggu pesan konfirmasi selanjut nya yg akan dikirim melalui sms</center></p>
		 <p><center><a href='ready.php'>SELESAI</p>";
	

	?> 
		

		
</div>

</div>

<div class="footer">
copyright@2015 , Reseller Distro Anime


</div>

</body>
</html>
