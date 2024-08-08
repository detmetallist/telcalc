<?php
	$sendto   = "det_metallist@mail.ru";
	$subject  = "Заявка на ремонт телефона";
	$headers = 'From: alexey <no-reply@alexeyy0.bget.ru>' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
	$phone = $_POST['tel'];	
	$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg  .= "Заявка на ремонт телефона <br>";
	$msg .= "<p><strong>Номер телефона:</strong> ".$phone."</p>";
	if($_POST['cena']){	$msg .= $_POST['cena'];	};
	if($_POST['model']){	$msg .= $_POST['model']; };
	if($_POST['color']){	$msg .= $_POST['color']; };
	if($_POST['polomka']){	$msg .= $_POST['polomka'];	};
	$msg .= "</body></html>";
	if(mail($sendto, $subject, $msg, $headers)) {
   	 	echo "<center>Заявка отправлена!</center>";
	} else {
    	echo "<center>Заявка не отправлена!</center>";
	}
?>