<?php
        include("connection1.php");
        // header('location:signin.php');

       $username = $_GET['uname'];
       $pass = $_GET['pwd'];


$query = "SELECT * FROM STUDENT WHERE username='$username' && password='$pass'";
$data =  mysqli_query($conn,$query);
$result = mysqli_num_rows($data);

if($result==1)
{
	header('location:index.php');
}
else
{
	echo "invalid user and password";
	header('location:signin.php');
}


?>