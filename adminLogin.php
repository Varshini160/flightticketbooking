<!DOCTYPE html>
<html>
    <head><title>Admin Panel Login</title></head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            form{
                margin-top: 180px;
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                margin-left: 420px;
                width: 35%;
                height: 250px;
            }
            form:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
</style>
    <body style="background-image:url('log.jpg');background-size: cover;">
      <form method="POST" class="text-center" action="ValidateAdmin.php"> 
            <h1 style="padding-top:20px;text-align:center;margin-bottom:20px">Admin Panel</h1>
            <label for="adminid" style="margin-right: 32px;">Email</label>
            <input type="text" name="adminid" id="adminid" required><br> <br>      
            <label for="adminpass" style="margin-right: 5px;">Password</label>
            <input type="password" name="adminpass" id="adminpass" required><br><br>
            <button name="lgnbut" type="submit" class="btn btn-success mt-3">
              <div style="font-size: 1.2rem;">
              <i class="fa fa-lg fa-arrow-right"></i> Login
              </div>
            </button><br>
            <?php if (isset($_GET['error'])) { ?><p class="error"><?php echo $_GET['error']; ?></p><?php } ?>     
      </form>
    </body>
</html>