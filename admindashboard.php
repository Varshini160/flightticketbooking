<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            form{
                margin-top: 20px;
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                margin-left: 420px;
                width: 32%;
                height: 130px;
                text-align: center;
            }
            .add{
                margin-top: 20px;
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                margin-left: 420px;
                width: 32%;
                height: 420px;
                text-align: center;
            }
            input{
                margin-right: 20px;
                margin-top: 10px;
            }
            form:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            h3{
                margin-top: 10px;
            }
            </style>
    </head>

    <body style="background-color:azure">
    <button onclick='window.location.href="index.php"' class="btn btn-danger" style="margin-left:1180px">Logout</button>
        <form method="POST" action="viewflight.php">
            <h3>View Bookings</h3>
            <input type="number" placeholder="Flight id" name="fid"><br>
            <input type="submit" class="btn btn-success" value="View">
        </form>

        <form class="add" method="POST" action="addflight.php">
            <h3>Add Flight</h3>
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="date">Date</label>
            <input type="date" name="date"><br>
            <label for="atime">Arrival time</label>
            <input type="time" name="atime"><br>
            <label for="dtime">Departure time</label>
            <input type="time" name="dtime"><br>
            <label for="seats">Available seats</label>
            <input type="number" name="seats"><br>
            <label for="cost">Cost</label>
            <input type="number" name="cost"><br>
            <?php require 'dbhelper.php';
            $sql = mysqli_query($conn, "SELECT city FROM cities");
            $data = $sql->fetch_all(MYSQLI_ASSOC);
            ?>

            <label>Source</label>
            <input type='text' name='source'><br>
            <label>Destination</label>
            <input type='text' name='destination'><br>
            <input type="submit" value="Add" class="btn btn-success">
        </form>

        <form method="POST" action="delflight.php">
            <h3>Delete Flight</h3>
            <input type="number" placeholder="Flight id" name="fid"><br>
            <input type="submit" class="btn btn-success" value="Delete">
            <?php if (isset($_GET['msg'])) { ?><p><?php echo $_GET['msg']; ?></p><?php } ?> 
        </form>
    </body>
</html>