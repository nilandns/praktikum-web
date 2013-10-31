<?php
//catatan
//jika perlu, sesuaikan nama user dan password

	$host = 'localhost';	//karena memakai server lokal->lihat phpmyadmin->privillege
	$user = 'root';
	$pass = 'serverweb';
	$db   = 'mysql';
	
	$cnn = mysql_connect($host, $user, $pass);
	if(!$cnn)
	{
		exit('Koneksi Gagal');
	}
	$db = mysql_select_db($db);
	if(!$db)
	{
		exit('Gagal Memilih Database');
	}
?>