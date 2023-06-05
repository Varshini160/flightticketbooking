<!DOCTYPE html>
<html>
    <head>
        <title>Flight Ticket booking</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            .cla{
                margin-top: 250px;
                margin-left: 150px;
                align-items: 70px;
            }
            h1,h2{
                color:white;
                font-size:40px;
                font-weight: bolder;
                font-family:'Courier New', Courier, monospace;
            }
        </style>
    </head>
</html>
<body style="background-image: url('home.jpg');background-size: cover">
    <h1 style="text-align: center;">Flight Ticket Booking</h1>
    
    <div class="cla dropdown">
    <h2 style="color:white;margin-bottom:40px">Book you flights</h2>
    <button class="btn" onclick="window.location.href = 'signup.php';">Signup</button>
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Login
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="userLogin.php">User</a><br>
    <a class="dropdown-item" href="adminLogin.php">Admin</a><br>
  </div>
</div>
</div>
</body>
