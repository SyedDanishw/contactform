<!DOCTYPE HTML>
<html>
<head>
<title> Freelance</title>
<link rel="stylesheet" href="Freelancecontactform.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
   
<h1 style="color:white;font-size:50px;">Contact Us</h1>
<br>

<div class="row">
	    <div class="col-sm-6 col-md-6">
		



	


<form method="POST">


 <div class="form-group">


<input id="name" type="text" name="name" placeholder="Your Name" class="form-control" required>
</div>




<div class="form-group">

<input id="email" type="text" name="email" placeholder="Email" class="form-control" required>
</div>


    

<div class="form-group">

<input id="subject" type="text" name="subject" placeholder="Subject" class="form-control" required>
</div>



   
<div class="form-group">

<textarea name="msg"  placeholder="Type your message" class="form-control" rows="5" required></textarea>
</div>

<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Send Message</button>
</div>



</form>

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
		echo '<script type="text/javascript">';
        echo '<div class="alert alert-success" role="alert">This is a success alert—check it out!</div>';  //not showing an alert box.
        echo '</script>';
	}
	else{
		echo '<script type="text/javascript">';
        echo '<div class="alert alert-success" role="alert">This is a success alert—check it out!</div>';  //not showing an alert box.
        echo '</script>';
	}
	
  }
?>
</div>
</div>


</div>




</body>
</html>