<?php require 'dbhelper.php';  
$if=(int)$_POST['id'];
$se=(int)$_POST['sea'];
$sql="UPDATE booking SET status='Booked' WHERE fid=$if";
$result = mysqli_query($conn, $sql);
$s="UPDATE flight SET seats= WHERE fid=$if";
$res = mysqli_query($conn, $s);
header("Location:userdashboard.php?error=$if");