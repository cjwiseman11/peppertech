<?php
	if(!$_POST) {
		echo "An error occured. What are you up to?";
		exit;
	} else {
		$to 	           = 'chris@peppertech.co.uk'; 
		$name	  		   = $_POST['name'];
		$email             = $_POST['email'];
		$message           = $_POST['message'];	
		if(get_magic_quotes_gpc()) { 
			$message = stripslashes($message); 
		}
		$subject = 'Peppertech Portfolio Contact Form: ' . $name ;
		$msg  = "Peppertech Portfolio Contact Form: $name.\r\n\n";
		$msg .= "$message\r\n\n";
		$msg .= "You can contact $name via email, $email.\r\n\n";
		$msg .= "-------------------------------------------------------------------------------------------\r\n";
								
		if(@mail($to, $subject, $msg, "From: $email\r\nReturn-Path: $email\r\n"))
		{
			echo "Success";
		}
		else
		{
			echo "Failed";
		}
	}
?>