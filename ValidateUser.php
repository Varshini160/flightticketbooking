<?php
require 'dbhelper.php';
$email=$_POST["userid"];
$pass=$_POST["userpass"];
$sql = "SELECT * FROM users WHERE useremail='$email' AND upassword='$pass'";
//$result = ;
if(mysqli_query($conn, $sql) != 0){
    session_start();    
    $_SESSION['name'] =$email;
    header("Location:userdashboard.php");
}
else{
    header("Location:userLogin.php?error=Incorrect Email id or password");
}
?>