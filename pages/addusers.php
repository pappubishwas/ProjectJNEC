<?php
include('../config/Database.php');
if(!isset ($_SESSION['Id']))
  {
    header('location:index.php');
  }
  ?>
<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form method="post" action="p_add_users.php">
<div id="wrapper">
  <?php include('navbar.php')?>
  <div id="page-wrapper">
    <br>
    <div class="card">
          <div class="card-header">
            <h4 class="alert alert-info">Add System User Details</h4>
          </div>
    <div class="card-body">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="form-group row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Enter Your Citizen Id Number:</label>
                  <input type="number" name="CID" id="CID" class="form-control" placeholder="CID number" >
                  <span id="cid_err"  class="text-danger"></span>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Enter Your Name:</label>
                <input type="text" name="Full_Name" id="Full_Name"  class="form-control" placeholder="Full Name" >
                <span id="name_err" class="text-danger"></span>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Enter Your Email Id / Username:</label>
                  <input type="text" name="User_Id" id="User_Id" class="form-control" placeholder="Email Id/User Id" >
                <span id="email_err" class="text-danger"></span>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Enter Your Phone Number:</label>
                <input type="text" name="Contact_Number" id="Contact_Number" class="form-control" placeholder="Contact Number">
                <span id="contact_err" class="text-danger"></span>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Select Your Role Type:</label>
                  <select name="Role_Id" id="Role_Id" class="form-control" placeholder="Role">
                    <option value=""> Select</option>
                    <option value="1"> Admin</option>
                    <option value="4"> Accounts</option>
                    <option value="2"> Exam-Cell</option>
                    <option value="3"> Student-Affairs<option>
                  </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Create Password:</label>
                <input type="text" name="Password" id="Password" class="form-control" placeholder="Password">
                <span id="password_err" class="text-danger"></span>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button class="btn btn-success pull-right" type="submit" value="submit" name="save">Add</button>
              </div>
          </div>
        </div>
    </div>
  </div>
  </div>
</div>
</div>
</form>

    <?php include('adminfooter.php')?>

</body>
</html>
