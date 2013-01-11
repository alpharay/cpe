<?php

//Prefedined Variables
$to = "syfiawoo@gmail.com";
$subject = "Contact from your website.";
if($_POST)
{
    $name = $_POST['name'];
    $email_from = $_POST['email']; 
    $comment = $_POST['comment']; 
    
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= date('d/m/Y')."\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comment)."\n";
    $message = date('d/m/Y')."\n" . $name . " (" . $email_from . ") sent the following comment:\n" . $comment;
     
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($to, $subject, $email_message, $headers);
}
/*
if($_POST) {
	// Collect POST data from form
	$name = stripslashes($_POST['name']);
	$email = stripslashes($_POST['email']);
	$comment = stripslashes($_POST['comment']);
	
	$header = "From:phatjoe40@yahoo.com \r\n";
   $retval = mail ($to,$subject,$comment,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
   
   
	// Define email variables
	$message = date('d/m/Y')."\n" . $name . " (" . $email . ") sent the following comment:\n" . $comment;
	$headers = 'From: '.$email.'\r\n\'Reply-To: ' . $email . '\r\n\'X-Mailer: PHP/' . phpversion();
	
	//Validate
	$header_injections = preg_match("(\r|\n)(to:|from:|cc:|bcc:)", $comment);
	
	if( ! empty($name) && ! empty($email) && ! empty($comment) && ! $header_injections ) {
		if( mail($to, $subject, $message, $headers) ) {
			return true;
		}
		else {
			return false;
		}
	}
	else {
		return false;
	}*/
?>
