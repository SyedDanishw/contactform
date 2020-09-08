<?php
  if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$subject=$_POST['subject'];
	
	$to='danishsyed849@gmail.com';
	
	$message="Name: ".$name."\n Subject: ".$subject."\n wrote the following:\n".$msg;
	$headers="From: ".$email;
	
	if(mail($to,$subject,$message,$headers)){
		echo"<h2>Sent Successfully!Thank you".$name."We will contact you shortly!</h2>";
	}
	else{
		echo"Something went wrong!";
	}
	
  }
?>