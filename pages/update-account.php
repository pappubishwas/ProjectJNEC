<?php
include('../config/Database.php');
if(count($_POST)>0) {
mysqli_query($con,"UPDATE t_student set Id='" . $_POST['Id'] . "', std_name='" . $_POST['std_name'] . "', std_number='" . $_POST['std_number'] . "', std_program='" . $_POST['std_program'] . "' ,account_status='" . $_POST['Role_Id'] . "' WHERE Id='" . $_POST['Id'] . "'");

$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM t_student WHERE Id='" . $_GET['Id'] . "'");
$row= mysqli_fetch_array($result);
?>

<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form name="frmUser" method="post" action="">
<div id="wrapper">
  <?php include('navbar.php')?>
  <div id="page-wrapper">
    <br>
    <div class="card">
          <div class="card-header">
            <h4 class="alert alert-info">Update Student Status</h4>
          </div>
          <div class="card-header"><h4 class="alert alert-success"><b><?php if(isset($message)) { echo $message; } ?></b></h4></div>
    <div class="card-body">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="form-group row">
            <input type="hidden" name="Id" class="txtField" value="<?php echo $row['Id']; ?>">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Student Name:</label>
                  <input type="text" name="std_name" id="std_name" value="<?php echo $row['std_name']; ?>" class="form-control">
                  <span id="cid_err"  class="text-danger"></span>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Student Number:</label>
                <input type="text" name="std_number" id="std_number" value="<?php echo $row['std_number']; ?>" class="form-control" >
                <span id="name_err" class="text-danger"></span>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Student Program:</label>
                  <input type="text" name="std_program" id="std_program" value="<?php echo $row['std_program']; ?>" class="form-control" placeholder="Email Id/User Id" >
                <span id="email_err" class="text-danger"></span>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Student Status:</label>
                  <select name="Role_Id" id="Role_Id" class="form-control" placeholder="Role" >
                    <option value="<?php echo $row['account_status']; ?>"></option>
                    <option value="R"> Reported</option>
                    <option value="NR"> Not Reported</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button class="btn btn-success pull-right" type="submit" value="submit" name="save">Update</button>
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
