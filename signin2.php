<?php
        include("connection1.php");
        header('location:signin.php');

       $username = $_GET['uname'];
       $pass = $_GET['pwd'];


$query = "INSERT INTO STUDENT VALUES('$username','$pass')";
$data = mysqli_query($conn,$query);




?>