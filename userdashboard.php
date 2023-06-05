<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">
        <style>
            form{
                margin-top: 20px;
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                margin-left: 420px;
                width: 32%;
                height: 85px;
                font-size: 15px;
            }
            input{
                margin-right: 20px;
            }
            form:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            div{
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                text-align: center;
                width: 60%;
                margin-left: 250px;
                margin-top: 5px;
            }
            </style>
    </head>
    <body style="background-color:azure">
    <?php if (isset($_GET['error'])) { ?><p class="error" style="text-align:center"><?php echo $_GET['error']; ?></p><?php } ?>    
    <button onclick='window.location.href="index.php"' class="btn btn-danger" style="margin-left:1200px">Logout</button>
        <form method="POST" action="booking.php">
            <?php require 'dbhelper.php';
            $sql = mysqli_query($conn, "SELECT city FROM cities");
            $data = $sql->fetch_all(MYSQLI_ASSOC);
            ?>
            <label style="margin-left:30px;">Source</label>
            <select name="Source">
            <option value=""></option>
            <?php foreach ($data as $row): ?>
            <option value="<?= htmlspecialchars($row['city']) ?>">
            <?= htmlspecialchars($row['city']) ?>
            </option>
            <?php endforeach ?>
            </select>
            <label style="margin-left:30px;">Destination</label>
            <select name="destination">
            <option value=""></option>
            <?php foreach ($data as $row): ?>
            <option value="<?= htmlspecialchars($row['city']) ?>">
            <?= htmlspecialchars($row['city']) ?>
            </option>
            <?php endforeach ?>
            </select><br><br>
            <input type="submit" value="GO" class="btn btn-success" style="margin-left:160px">
            </form>
        <h2>MY BOOKINGS</h2>
        <?php require 'dbhelper.php';
            session_start();
            $em=$_SESSION["name"];
            $s = mysqli_query($conn, "SELECT * FROM booking WHERE useremail='$em'");
            $book = $s->fetch_all(MYSQLI_ASSOC);
            ?>
        <table class="table table-info table-striped">
            <tr>
                <th>Flight Name</th>
                <th>Date</th>
                <th>Status</th>
                <th>Passengers</th>
            </tr>
            <?php foreach ($book as $row):?>
                <tr>
            <td><?= $row['fname']?></td>
            <td><?= $row['date']?></td>
            <td><?= $row['status']?></td>
            <td><?= $row['count']?></td></tr>
            <?php endforeach ?>
            </table>
    </body>
</html>