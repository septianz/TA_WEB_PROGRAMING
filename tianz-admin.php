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
</div>

<div class="content">
<div class="log">
	<div class="lo">
	<table>
	<form  method="post" action="ceklog.php">
	<tr>
	<td colspan="3"><center><p>Admin please login first....</p><center></td>
	</tr>
	<tr>
	<td>username</td>
	<td>:</td>
	<td><input type="text" placeholder="Username.." name="user"/></td>
	</tr>
	<tr>
	<td>password</td>
	<td>:</td>
	<td><input type="password" placeholder="password.." name="pass"/></td>
	</tr>
	<tr>
	<td colspan="3"><center><input type="submit" name="login" value="Login"/><center></td>
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
