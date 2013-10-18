<html>
<head>
	<title>Data Checkbox</title>
</head>
<body>
<h3>CONTACT BY</h3>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="checkbox" name="contactmethod[]" id="mail_contact" value="Mail" 
			<?php 
				echo (isset($_POST['contactmethod']) && in_array('Mail',$_POST['contactmethod']))? 'checked':'';
			?> />Mail
            
        <input type="checkbox" name="contactmethod[]" id="mail_contact" value="Phone" 
			<?php 
				echo (isset($_POST['contactmethod']) && in_array('Phone',$_POST['contactmethod']))? 'checked':'';
			?> />Phone
            
        <input type="checkbox" name="contactmethod[]" id="mail_contact" value="Whatsapp" 
			<?php 
				echo (isset($_POST['contactmethod']) && in_array('Whatsapp',$_POST['contactmethod']))? 'checked':'';
			?> />WhatsApp
            
        <input type="checkbox" name="contactmethod[]" id="mail_contact" value="Line" 
			<?php 
				echo (isset($_POST['contactmethod']) && in_array('Line',$_POST['contactmethod']))? 'checked':'';
			?> />Line
            
        <input type="checkbox" name="contactmethod[]" id="mail_contact" value="Kakaotalk" 
			<?php 
				echo (isset($_POST['contactmethod']) && in_array('Kakaotalk',$_POST['contactmethod']))? 'checked':'';
			?> />KakaoTalk
            
		<input type="submit" value="OK" name="submit">
	</form>
	
	<?php
		//ekstraksi nilai
		if(isset($_POST['contactmethod[]']))
		{
			foreach($_POST['contactmethod[]'] as $key=>$val)
			{
				echo $key.'->'.$val.'<br/>';
			}
		}
	?>
</body>
</html>