<html>
<head>
	<title>Data Radio Button</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		JENIS KELAMIN
		<input type="radio" name="sex" value="Pria">PRIA
		<input type="radio" name="sex" value="Wanita">WANITA<br/>
		<input type="submit" value="OK">
	</form>
	
	<?php
		if(isset($_POST['sex']))
		{
			echo $_POST['sex'];
		}
	?>
</body>
</html>