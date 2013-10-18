<html>
<head>
	<title>Login Page</title>
</head>

<style type="text/css">

*{
	font-family: Arial;
	margin: auto;
	padding:0;
	background-color:#9CF;
}

#container{
	margin:  20px auto;
	width: 15%;
	height: auto;
	padding: 10px;
	border: 1px solid silver;
}

.textinput{
width: 100%;
height: 30px;
margin: 5px auto;
}

.btn{
	width: 100%;
	padding:5px;
	background-color: #00ccff;
	border: none;
	color:white;
	font-weight: 900;
}

.btn:hover{
	cursor: pointer;
}

.textinput{
	background-color: #fafafa;
	border: inset 1px #efefef;
}
</style>
<script>

function cekhuruf(huruf)
{
	cek = /^[A-Za-z]{1,}$/;
	return cek.test(huruf);
}

function validateForm()
{
	var username=document.forms["myForm"]["username"].value;
	var pass=document.forms["myForm"]["pass"].value;
	
	if ((username==null || username=="")||(pass==null|| pass==""))
	{
		alert("Username dan Password harus diisi");
		document.getElementById("username").focus();
		return false;
	}
	
	if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
	{
		alert("Username dan password harus berupa huruf");
		document.getElementById("username").focus();
		return false;
	}
	return true;
}
</script>
<body>
<div id="container">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onSubmit="return validateForm()">
		<input type="text" name="username" class="textinput" id="username" value="username"/>
		<input type="password" name="pass" class="textinput" id="pass" value="password"/>
		<input type="submit" name="submit" value="login" class="btn"/>
		<input type="checkbox" name="remember" class="checkbox" 
		<?php 
			echo (isset($_POST['remember']) && in_array('remember',$_POST['remember']))? 'checked':'';
		?> />&nbsp;<small>Selalu login</small>
	</form>
</div>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='dewnis')&&(isset($_POST['pass'])&&$_POST['pass']=='dewnis')) {
		echo "<center>Selamat datang, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username dan/atau password salah')</script>";
	}
}
 ?>

</body>
</html>