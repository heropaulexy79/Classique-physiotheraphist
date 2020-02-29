<!DOCTYPE html>
<html>
<head>
	<title>Sending Mail....</title>
</head>
<body>
	<?php
	session_start();

	//error_reporting(E_ALL ^ E_DEPRECATED);

	//include('config.php');
	$pass = $_POST["password"];
	$user = $_POST["username"];
	$emailid = $_POST["emailid"];

	$_SESSION["emailid"] = $emailid;
	$_SESSION["pass"] = $pass;
	$_SESSION["user"] = $user;

	$ra = rand(100,999999); 
	$_SESSION["random"]=$ra;

	$to = $emailid;
	$subject = "Your Registration Verification Code";
	$from = "From: Classiquephysiotherapy Services";

	$message ="Registration Verification Code" .$ra.;

	/*$header = "From:classiquephysiotherapist@gmail.com \r\n";
	$header = "Cc:classiquephysiotherapist@gmail.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";*/

	//$retval = 
	//mail(to, subject, message)
	mail($to, $from, $subject, $message);

	//if( $retval == true) {
		echo $ra;
		echo $emailid;
		echo "Check your email for verification code".'<br>';

		/*$sql = "INSERT INTO random(emailid, ran_num) VALUES ('$emailid', '$ra')";
		mysql_query($sql);
		include ('VerifyEmail.php');*/
	//} 
	//else{
		//echo "Message Could not be sent.....";
	//}
	 ?>
</body>
</html>