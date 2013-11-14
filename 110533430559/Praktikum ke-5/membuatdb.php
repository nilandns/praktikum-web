<h1>Cemungud ea ^_^</h1>
<?php 
	$host= 'localhost';
	$user= 'root';
	$pass= 'serverweb';
	$db = 'myweb';
	
	$cnn = mysql_connect($host, $user, $pass);
	if (!$cnn){
		exit('Koneksi Gagal');
	}else
	{ echo 'Koneksi berhasi';}
	
	$dbs = mysql_select_db($db);
	if(!$dbs){
		$res = mysql_query('CREATE DATABASE '. $db); 
		if ($res){
			echo 'Database' . $db . 'Created';
			mysql_close($res);
			}else
			{echo 'gagal';
			}
	}else
		{echo 'Berhasil memilih database';}
?>