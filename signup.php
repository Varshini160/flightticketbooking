<!DOCTYPE html>
<html>
    <head><title>Registration</title></head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            form{
                margin-top: 90px;
                background-color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                margin-left: 460px;
                width: 30%;
                height: 460px;
            }
            input{
                margin-right: 20px;
            }
            form:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
</style>
    <body style="background-image:url('log.jpg');background-size: cover;">
      <form method="POST" class="text-center" action="ValidateReg.php"> 
            <h1 style="padding-top:20px;text-align:center;margin-bottom:20px">Sign Up</h1>
            <label for="username" style="margin-right: 30px;">Name</label>
            <input type="text" name="username" id="userid" required><br> <br>   
            <label for="userid" style="margin-right: 32px;">Email</label>
            <input type="text" name="userid" id="userid"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br> <br>  
            <label for="phoneno" style="margin-right: 14px;">Contact</label> 
            <input type="text" name="phoneno" id="phoneno" required><br><br>
            <label for="adhaarno" style="margin-right: 0px;">Adhaar No</label> 
            <input type="text" name="adhaarno" id="adhaarno" required><br><br>
            <label for="userpass" style="margin-right: 1px;">Password</label>
            <input type="password" name="userpass" id="userpass" required><br><br>
            <label for="cpass" style="margin-right: 2px;">Confirm<br>Password</label>
            <input type="password" name="cpass" id="cpass" required><br><br>
            <button name="lgnbut" type="submit" class="btn btn-success mt-3">
              <div style="font-size: 1.2rem;">
              <i class="fa fa-lg fa-arrow-right"></i> Signup
              </div>
            </button><br>
            <?php if (isset($_GET['error'])) { ?><p class="error"><?php echo $_GET['error']; ?></p><?php } ?>     
      </form>
    </body>
</html>