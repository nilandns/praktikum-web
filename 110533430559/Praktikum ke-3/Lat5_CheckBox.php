<html>
<head>
	<title>Data Checkbox</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		JENIS KELAMIN
		<input type="checkbox" name="hobby[]" value="Membaca">Membaca
		<input type="checkbox" name="hobby[]" value="Olahraga">Olahraga
		<input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi<br/>
		<input type="submit" value="OK">
	</form>
	
	<?php
		//ekstraksi nilai
		if(isset($_POST['hobby']))
		{
			foreach($_POST['hobby'] as $key=>$val)
			{
				echo $key.'->'.$val.'<br/>';
			}
		}
	?>
</body>
</html>