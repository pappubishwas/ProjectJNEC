<?php 
include('../config/Database.php');
if(isset($_POST['but_submit'])){
    if(!empty($_POST['user_name']) && !empty($_POST['txt_pwd']))
    {
        $email      = trim($_POST['user_name']);
        $password   = trim($_POST['txt_pwd']);
        $sql = "select * from t_user_details where User_Id = '".$email."' and Password = '".$password."'";
        $rs = mysqli_query($con,$sql);
        $getNumRows = mysqli_num_rows($rs);
        
        if($getNumRows == 1)
        {
            $getUserRow = mysqli_fetch_assoc($rs);
            unset($getUserRow['txt_pwd']);
            
            $_SESSION = $getUserRow;
                        
            header('location:admindashboard.php');
            exit;
        }
        else
        {
            $errorMsg = "Wrong email or password";
        }
    }
}

if(isset($_GET['logout']) && $_GET['logout'] == true)
{
    session_destroy();
    header("location:index.php");
    exit;
}


if(isset($_GET['lmsg']) && $_GET['lmsg'] == true)
{
    $errorMsg = "Login required to access dashboard";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | StudentR&RS</title>
    <link href="../assest/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../assest/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->
    <link href="../assest/css/sb-admin-2.css" rel="stylesheet">
    <link href="../assest/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body class="login-page">
    <div class="header-bottom">
    <nav class="navbar navbar-default bg-primary">
        <div class="navbar">
            <h2 style="text-align: center;"><a href="#">STUDENT REGISTRATION & REPORTING SYSTEM</a></h2>
        </div>
    </nav>
    </div>
    <div class="container">
        <div class="text-center">
            <h2>HOME</h2> 
            <h4>JIGME NAMGYEL ENGINEERING COLLEGE</h4>
        </div>
        <br>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                 <h3 class="panel-title" style="text-align: center;">Enter Your Credentails Here</h3>
                </div>
            <div class="panel-body">
                <form name="loginform" method="post" onsubmit="return validateForm()" action="">
                    <fieldset>
                        <br>
                        <div class="form-group">
                        <!-- <label>Enter Your Login Id:</label> -->
                        <input class="form-control" placeholder=" Enter Username"  id="user_name"name="user_name" type="text" autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                        <!-- <label>Enter Your Password:</label> -->
                        <input class="form-control" placeholder="Enter Password" id="txt_pwd"name="txt_pwd" type="password" value="">
                        </div>
                        <div class="form-group">
                          <!-- <label>Select User Type:</label> -->
                          <select name="roleid" id="roleid" class="form-control" placeholder="Role">
                            <option value="">Select User Type</option> 
                            <option value="1">Admin</option> 
                            <option value="4">Exam Cell</option> 
                            <option value="3">Student Affairs</option> 
                            <option value="2">Accounts</option> 
                          </select>
                      </div>
                        <input type="checkbox"> Remember Username.
                        <br><br>
                        <input type="submit" value="Login" name="but_submit" class="btn btn-lg btn-success btn-block">
                    </fieldset>
                </form>
                <div>
                    <br>
                    <span>
                        <a href="forgotpassword.php">Forgot Password?</a>
                    </span> 
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<footer class="footer">
<div class="header-bottom">
    <nav class="navbar navbar-default bg-primary">
        <div class="navbar">
            <h4 style="text-align: center; color: black"><strong>Copyright &copy; 2020 <a href="#">D2CSN</a>.</strong> All rights reserved.</h4>
            <h4 style="text-align: center; color: red"> Version Beta-1.0.0</h4>
        </div>
    </nav>
</div>
</footer>
<script type="text/javascript">
function validateForm() {
  var x = document.forms["loginform"]["user_name"].value;
  var y = document.forms["loginform"]["txt_pwd"].value;
  if (x == "") {
    alert("UserName must be filled out");
    return false;
  }
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }

}
</script>
<script src="../assest/jquery/dist/jquery.min.js"></script>
<script src="../assest/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assest/js/jquery-1.3.2.js" type="text/javascript"></script>
</body>
</html>
