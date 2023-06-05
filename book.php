<?php require 'dbhelper.php';  
$p=$_POST['pas'];
$if=(int)$_POST['id'];
$sql="SELECT * from flight WHERE fid=$if";
$result = mysqli_query($conn, $sql);
session_start();
$em=$_SESSION['name'];
$c=0;
$seats=0;
while ($row = mysqli_fetch_assoc($result)){
    $c=$row["cost"]*$p;
    $seats=$row["seats"];
    $n=$row['fname'];
    $date=$row['date'];
}
if($seats<$p){
    header('Location:userdashboard.php?error=Seats Unavailable');
}
else{
    $sqll="INSERT INTO booking(fid, fname, date, status, count, useremail) VALUES ('$if', '$n', '$date', 'Cancelled', '$p', '$em')";
    $res = mysqli_query($conn, $sqll);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Flight</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
        <style>
            form{
                margin-top: 20px;
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                margin-left: 440px;
                width: 32%;
                height: 150px;
                text-align: center;
                font-size: 15px;
            }
            input{
                margin-top: 20px;
            }
            form:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            h1{
                text-align: center;
                margin-top: 160px;
            }
        </style>
    </head>
    <body style="background-color:azure">
    <h1>Payment</h1>
       <form method="POST" action="confirmbooking.php">
        <input type='text' placeholder="Account No" required>
        <input type='text' placeholder="CVV No" required maxlength="3"><br>
        <?php echo "Total cost=".$c;?><br><br>
        <input type = "hidden" name = "id" value = "<?=  htmlspecialchars($if) ?>">
        <input type = "hidden" name = "sea" value = "<?=  htmlspecialchars($seats-$p) ?>">
        <button class='btn btn-success'>Pay</button>
       </form>
    </body>
</html>