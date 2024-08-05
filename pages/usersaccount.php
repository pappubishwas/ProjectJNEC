<?php
include('../config/Database.php');
if(count($_POST)>0) {
mysqli_query($con,"UPDATE t_user_details set Id='" . $_POST['Id'] . "', CID='" . $_POST['CID'] . "', Full_Name='" . $_POST['Full_Name'] . "', User_Id='" . $_POST['User_Id'] . "' ,Contact_Number='" . $_POST['Contact_Number'] . "' WHERE Id='" . $_POST['Id'] . "'");

$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM t_user_details WHERE Id='" . $_GET['Id'] . "'");
$row= mysqli_fetch_array($result);
?>

<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form method="post" action="p_add_student.php">
<div id="wrapper">
  <?php include('navbar.php')?>
  <div id="page-wrapper">
    <br>
    <div class="col-md-12">
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="alert alert-info">Update User Details</h3>
    </div>
    <p class="text-center">
  <img src="../dist/img/user1-128x128.jpg"  style="max-width: 150px; height: auto;" class="img img-circle img-thumbnail">
  </p>
  <hr>
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="Id" class="txtField" value="<?php echo $row['Id']; ?>">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Identity Number:</label>
                <input type="number" name="CID" value="<?php echo $row['CID']; ?>" id="CID" class="form-control">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Name:</label>
                <input type="text" value="<?php echo $row['Full_Name']; ?>" name="Full_Name" id="Full_Name" class="form-control">
              </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>E-mail / User Id:</label>
                <input type="text" value="<?php echo $row['User_Id']; ?>" name="User_Id" id="User_Id" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Contact Number:</label>
              <input type="text" value="<?php echo $row['Contact_Number']; ?>" name="Contact_Number" id="Contact_Number" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Role:</label>
              <input type="text" value="<?php echo $row['Role_Id']; ?>" class="form-control" readonly>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Upload Photo:</label>
              <input type="file" name="photo" id="photo" class="form-control" placeholder="Photo/Logo" value=" ">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <input type="hidden" name="userId" value="">
              <button class="btn btn-success pull-right" type="button" onclick="updateDetails()"> <i class="fa fa-edit"></i>Update</button>
            </div>
          </div> 
      </div>
  </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="alert alert-info">Change Password</h3>
    </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label>New Password:</label>
              <input type="text" name="Password" value="" id="Password" class="form-control">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <input type="hidden" name="userId" value="">
              <button class="btn btn-success pull-right" type="button" onclick="updatepassword()"> <i class="fa fa-edit"></i>Update</button>
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
