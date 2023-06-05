<?php
require 'dbhelper.php';
$fid=$_POST['fid'];
$query = "DELETE FROM flight WHERE fid=$fid";
$con=new mysqli("localhost","root","","ticketbooking");
$con->query( $query);
if($con->affected_rows!=0){
    echo '<script>alert("Flight Deleted")</script>';
}
else{
    header("Location:admindashboard.php?msg=No flight with id found");
}
?>