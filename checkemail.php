<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);

include('config.php');

$emailid = $_GET['emailid'];
$data = "";

$sql = "SELECT * FROM register WHERE emailid = '$emailid'";
$res = mysql_query($sql);
$count = 0;
while($temp = mysql_fetch_assoc($res))
{
	$count ++;
}
if($count > 0 )
{
	$data = "email already exists";
}
else
{
	$data = "you can register";
}
echo $data;
?>