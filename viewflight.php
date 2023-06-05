<?php
require 'dbhelper.php';
$fid=$_POST['fid'];
$query = "SELECT * FROM booking WHERE fid=$fid";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)!=0)
{
    echo "<h1 style=\"text-align:center;\">Booking details</h1>";
    echo '<html><head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">
  </head></head><body><table class="table table-info table-striped">';
    echo '<tr><th scope="col">Email</th><th scope="col">Date</th><th scope="col">Booked seats</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row['useremail'];
        $seats= $row['count'];
        $date=$row['date'];
        echo '<tr scope="row"><td>'.$email.'</td><td>'.$date.'</td><td>'.$seats.'</td></tr>';
        
    }
    echo '</table></body></html>';
}
else{
    echo "<h1>No results found</h1>";
}
?>