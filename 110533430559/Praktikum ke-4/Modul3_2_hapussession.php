<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Session</title>
</head>

<body>
<?php
	//inisialisasi data session
	session_start();
	//set session jika belum ada
	if(isset($_SESSION['test']))
	{
		//hapus session tes
		unset($_SESSION['test']);
		echo 'session dihapus';
	}else{
		echo 'unset';
		//mencetak semua elemen session
		print r($_SESSION);
	}
?>
    <p>
    	tekan refresh (F5)        
    </p>
</body>
</html>