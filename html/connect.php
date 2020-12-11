<?php 
$hostname = 'localhost:3306';
$username ='root';
$password = '';
$dbname = 'qldh';

$con = mysqli_connect($hostname, $username, $password, $dbname );
if(!$con){
	die('không thể kết nối: ' . mysqli_error($con));
	exit();
}



 ?>