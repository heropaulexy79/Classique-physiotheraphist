<?php 
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die('unable to connect' .mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'classicphysiotherapy');
if(!$select_db){
	die('unable to select db' .mysqli_error($connection));
}

?>