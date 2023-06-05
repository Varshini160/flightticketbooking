<?php
require 'dbhelper.php';
$source=$_POST['Source'];
$query = "SELECT * FROM flight WHERE source='$source'";
$result = mysqli_query($conn, $query);
echo '<h1 style="text-align:center;">Available Flights</h1>';
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['fname'];
    $seats= $row['seats'];
    $date=$row['date'];
    $atime=$row['arrivalTime'];
    $dtime=$row['departureTime'];
    $f=$row['fid'];
    $cost=$row['cost'];
    //session_start();
    // $_SESSION['fid']=$f;
    // $_SESSION['fname']='$title';
    // $_SESSION['date']='$date';
    echo '<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">';
    echo '<p style="font-weight: bold;">' . $title . '</p>';
    echo '<p> Available seats: ' . $seats . '</p>';
    echo '<p> Date: '.$date.'</p>';
    echo '<p> Arrival Time: '.$atime.'</p>';
    echo '<p> Departure Time: '.$dtime.'</p>';
    echo '<form method="POST" action="book.php">';
    echo 'Total Passenger<input type="number" name=pas>';
    echo '<br><p id="c">Cost: '.$cost.'</p>';
    echo '<input type = "hidden" name = "id" value = '.$f.'>';
    echo "<input type='submit' value='Book' style='background-color: #007bff; color: #fff; padding: 5px 10px; border: none;'>";
    echo '</form>';
    echo '</div>';
    
}   
?>