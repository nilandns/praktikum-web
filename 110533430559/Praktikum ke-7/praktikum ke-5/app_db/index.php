<html>
<head>
        <title>Latihan 4</title>
</head>
<body>
<?php 
define("VALID", 1);
require_once("auth.php");

init_login();
validate();

require_once("../koneksi.php");
require_once("data_handler.php");

define("MHS", "mahasiswa");
data_handler("?m=data");
 ?>

</body>
</html>