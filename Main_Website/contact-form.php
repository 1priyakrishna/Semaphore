<?php 


	ini_set("SMTP", "aspmx.l.google.com");
	ini_set("sendmail_from", "gauravdahal53@gmail.com");


	$name =$_POST['name'];
	$mailfrom=$_POST['email'];
	$message=$_POST['message'];
	$subject="Cyber Crime";

	$mailto ="gauravdahal53@gmail.com";
	$headers="From: ".$mailfrom;



	if(mail($mailto,$subject,$message,$headers)){

		echo "Mail sent successfully";
	}

	else{

		echo "Cannot send mail";
	}




?>









