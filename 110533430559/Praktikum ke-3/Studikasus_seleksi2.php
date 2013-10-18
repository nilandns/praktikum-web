<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="coba" method="post">
<h3>Asal Sekolah</h3>
<select name="sekolah">
    <option value="SMA"<?=($row['something'] == SMA)? ' selected="selected"':''?>>SMA</option>
    <option value="SMK"<?=($row['something'] == SMK)? ' selected="selected"':''?>>SMK</option>
    <option value="MA"<?=($row['something'] == MA)? ' selected="selected"':''?>>MA</option>
    
</select>
<input type="submit" name="submit" value="okay"/>
</form>
<?php
		if(isset($_POST['sekolah']))
		{
			echo $_POST['sekolah'];
		}
	?>
</body>
</html>