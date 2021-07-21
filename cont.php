<?php

	$con=mysqli_connect("localhost","root","2814","ecommerce") or die(mysqli_error($con));
	session_start();
        date_default_timezone_set('Asia/Kolkata');
 
	$name=mysqli_real_escape_string($con, $_POST['name']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$message=mysqli_real_escape_string($con, $_POST['message']);
        $udate=date('d-m-Y h:i:s A', time());;

	$user_reg="insert into query(name,email,message,time) values('$name','$email','$message','$udate')";

	$result=mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));

	
	echo "<center>Thankyou for contacting us.<br>Our Representative will contact you soon. <br>";
?>


<a href="contact_us.php"> <?php echo "<br>Continue Shopping..!!</center>"; ?> </a>


 