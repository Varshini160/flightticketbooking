<?php
require 'dbhelper.php';
$email=$_POST["adminid"];
$pass=$_POST["adminpass"];
$sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
// $result = mysqli_query($conn, $sql);
if(mysqli_query($conn, $sql)!= 0){
    header("Location:admindashboard.php");
}
else{
    header("Location:adminLogin.php?error=Incorrect Email id or password");
}
?>