<?php
    if(isset($_POST['submit'))){
		$name=$_POST['name'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		
		$to='dimicluka81@gmail.com';
		$subject='Form Submission';
		$message="Name: ".$name. "\n"."Email: ".$email. "\n". "Wrote the following: "."\n\n".
		$headers="From: ".$email;
		
	mail($to, $subject,$message,$headers);
  }
?> 
