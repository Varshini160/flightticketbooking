<?php
require 'dbhelper.php';
$name=$_POST['name'];
$date=$_POST['date'];
$atime=$_POST['atime'];
$dtime=$_POST['dtime'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$seats=$_POST['seats'];
$cost=$_POST['cost'];
$sql = "INSERT INTO flight(fid, fname, date, arrivalTime, departureTime, source,destination,seats,cost,createdBy,createdOn,updatedOn) VALUES (NULL,'$name','$date','$atime','$dtime','$source','$destination','$seats','$cost','Admin',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error ". mysqli_error($conn);
}
?>