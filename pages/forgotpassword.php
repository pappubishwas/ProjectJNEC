<?php 
include('../config/Database.php');
if(isset($_POST['but_submit']))
{
    $User_Id = $_POST['User_Id'];
    $result = mysqli_query($con,"SELECT * FROM t_user_details where User_Id='" . $_POST['User_Id'] . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_User_Id=$row['User_Id'];
    $Email=$row['Email'];
    $Password=$row['Password'];
    if($User_Id==$fetch_User_Id) {
                $to = $Email;
                $subject = "Password";
                $body = "Your password is : $Password.";
                $headers = "From: sdorji815@gmail.com";
                mail($to,$subject,$body,$headers);
            }
                else{
                    echo 'invalid Email';
                }
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
                 <h3 class="panel-title" style="text-align: center;">Forgot Password</h3>
                </div>
            <div class="panel-body">
                <form method="post"  action="">
                    <fieldset>
                        <br>
                        <div class="form-group">
                        <!-- <label>Enter Your Login Id:</label> -->
                        <input class="form-control" placeholder=" Enter Your Email Address"  id="User_Id"name="User_Id" type="text" autofocus autocomplete="off">
                        </div>
                        <input type="submit" value="Submit" name="but_submit" class="btn btn-lg btn-success btn-block">
                    </fieldset>
                </form>
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
<script src="../assest/jquery/dist/jquery.min.js"></script>
<script src="../assest/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assest/js/jquery-1.3.2.js" type="text/javascript"></script>
</body>
</html>
