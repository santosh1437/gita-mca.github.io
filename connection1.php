<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mca dept.";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	echo " ";
}
else{
	die("connection is failed because".mysqli_connect_error());
}


?>