<html>
<head>
	<title>Menangani Masukan Data Metode GET</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama" value="<?php echo isset($_GET['nama'])? ($_GET['nama']):''; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="OK"></td>
		</tr>
	</table>
	</form>
	
	<?php
	if(isset($_GET['nama']))
	{
		echo 'Halo,'.$_GET['nama'];
	}
	?>
</body>
</html>