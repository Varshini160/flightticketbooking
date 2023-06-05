<?php
require 'dbhelper.php';
$email=$_POST["userid"];
$pass=$_POST["userpass"];
$cpass=$_POST["cpass"];
$name=$_POST["username"];
$contact=$_POST["phoneno"];
$adhaar=$_POST["adhaarno"];
$sql = "SELECT * FROM users WHERE useremail='$email'";
if(mysqli_num_rows(mysqli_query($conn, $sql))!=0){
    header("Location:signup.php?error=Account already exists");
}
else{
    if($pass==$cpass){
        $sqlins = "INSERT INTO users (username,useremail,upassword,contact,adhaar) VALUES ('$name','$email','$pass','$contact','$adhaar')";
        if(mysqli_query($conn, $sqlins)){
            header("Location:userLogin.php");
        }
       else{
        header("Location:signup.php?error=Try again");
       }
    }
    
    else
    header("Location:signup.php?error=Password and confirm password fields need to be same");
}
?>