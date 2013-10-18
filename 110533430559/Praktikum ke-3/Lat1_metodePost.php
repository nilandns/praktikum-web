<html>
<head>
	<title>Menangani Masukan Data Metode GET</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama" value="<?php echo isset($_POST['nama'])? ($_POST['nama']):''; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="OK"></td>
		</tr>
	</table>
	</form>
	
	<?php
	if(isset($_POST['nama']))
	{
		echo 'Halo,'.$_POST['nama'];
	}
	?>
</body>
</html>