<html>
<head>
	<title>Data Seleksi</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		PEKERJAAN
		<select name="job">
			<option value="Mahasiswa">Mahasiswa
			<option value="ABRI">ABRI
			<option value="PNS">PNS
			<option value="Swasta">Swasta
		</select><br/>
		
		<input type="submit" value="OK">
	</form>
	
	<?php
		if(isset($_POST['job']))
		{
			echo $_POST['job'];
		}
	?>
</body>
</html>