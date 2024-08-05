<?php
include('../config/Database.php');
if(count($_POST)>0) {
mysqli_query($con,"UPDATE t_student set Id='" . $_POST['userid'] . "', std_name='" . $_POST['name'] . "',sa_status='" . $_POST['name'] . "'  WHERE Id='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM t_student WHERE Id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form method="post" >
<div id="wrapper">
  <?php include('navbar.php')?>
  <div id="page-wrapper">
    <br>
     <div class="modal modal-default" id="deleteSlider">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Update Student Information</h4>
          </div>
          <div class="modal-body">
            <form name="frmUser" method="post" action="">
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      	<input type="text" name="name" class="form-control" id="Id" >
                            <label> Student Name:</label>
                            <input type="text" name="name" class="form-control" id="name" >
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label> Change Student (Reported):</label>
                            <input type="text" name="info" class="form-control" id="info" >
                        </div>
                    </div>
                    </div>
                    <br><br><br>
                    <div class="modal-footer">
                    <div class="form-group">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
                          <input type="hidden" name="deleteId" id="deleteId">
                          <button class="btn btn-success" type="button" value="Submit"> <i class="fa fa-check"></i>Save Changes</button>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
            </form>
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

