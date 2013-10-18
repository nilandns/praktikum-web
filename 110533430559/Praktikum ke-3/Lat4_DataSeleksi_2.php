<html>
<head>
	<title>Data Seleksi</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="fruit"> 
            <option 
				<?php 
					if(isset($fruit) && $fruit == "Banana")
					{
						print "selected=\"selected\"";
					} 
				?>>Banana</option> 
            <option 
				<?php 
					if(isset($fruit) && $fruit == "Apple")
					{
						print "selected=\"selected\"";
					} 
				?>>Apple</option> 
            <option 
				<?php 
					if(!isset($fruit))
					{
						print "selected=\"selected\"";
					} 
					if(isset($fruit) && $fruit == "Orange")
					{
						print "selected=\"selected\"";
					} 
				?>>Orange</option> 
		</select>
        <br/>
		<input type="checkbox" name="contactmethod[]" id="mail_contact" value="Mail" <?php echo (isset($_POST['contactmethod']) && in_array('Mail',$_POST['contactmethod']))? 'checked':'';?> />Mail
		<input type="submit" value="OK">
	</form>
	
	<?php
		if(isset($_POST['fruit']))
		{
			echo $_POST['fruit'];
		}
	?>
</body>
</html>