<!DOCTYPE html>
<html>
<head>
	<title>Complete Registration</title>
</head>
<body>
<center>
	<?php  
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);

	$v="";
	$e="";

	$user = $_SESSION["user"];
	$emailid = $_SESSION["emailid"];
	$pass = $_SESSION["pass"];
	$veri_code = $_POST["code"];

	include('config.php');

	$retval = "SELECT * FROM random WHERE ran_num = $veri_code";
	$res = mysql_query($retval);

	while($temp=mysql_fetch_assoc($res))
	{
		$e = $temp['emailid'];
		$v = $temp['ran_num'];
	}
	if($v==$veri_code and $e==$emailid)
	{
		$sql2 = "INSERT INTO register VALUES(NULL, '$user', '$emailid', '$pass' )";
		mysql_query($sql2);
		$output .="
		<script>
		var pid = 'Registration Completed! You'll be directed to the forum page.';
		window.alert(pid)
		</script>
		"; 
		echo $output;
		header("forum.php");
		//include('forum.php');
	}
	else
	{
		echo "You have entered wrong verification code";
	}
	?>
</center>
</body>
</html>