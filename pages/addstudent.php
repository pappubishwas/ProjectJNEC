<?php
include('../config/Database.php');
if(!isset($_SESSION['Id'],$_SESSION['Role_Id']))
  {
    header('location:index.php');
    exit;
  }
?>
<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form method="post" action="p_add_student.php">
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
                          <label>Enter Student Number:</label>
                          <input type="number" name="std_number" id="std_number" class="form-control" placeholder="Student Number" required="required" >
                          <span id="program-availability-status" style="font-size:12px;"></span>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label>Enter Student Name:</label>
                        <input type="text" name="std_name" id="std_name"  class="form-control" placeholder="Student Name" required="required">
                        <span id="Student-status" style="font-size:12px;"></span>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Select Gender Type:</label>
                          <select name="std_gender" id="std_gender" class="form-control" placeholder="Role">
                            <option value=""> Select</option>
                            <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Select Program Type:</label>
                          <select name="std_program" id="std_program" class="form-control" placeholder="Role">
                            <option value=""> Select</option>
                              <option value="B.E Power Engeering">B.E Power Engeering</option>
                              <option value="B.E Mechanical Engeering">B.E Mechanical Engeering</option>
                              <option value="B.E Surveying & Geoinformatics">B.E Surveying & Geoinformatics</option>
                              <option value="Diploma in Civil Engeering">Diploma in Civil Engeering</option>
                              <option value="Diploma in Electrical Engeering">Diploma in Electrical Engeering</option>
                              <option value="Diploma in Mechanical Engeering">Diploma in Mechanical Engeering</option>
                              <option value="Diploma in Surveying">Diploma in Surveying</option>
                              <option value="Diploma in Electronics and Communication Engeering">Diploma in Electronics and Communication Engeering</option>
                              <option value="Diploma in Computer System and Network Engeering">Diploma in Computer System and Network Engeering</option>
                              <option value="Diploma in Materials and Procurement Management">Diploma in Materials and Procurement Management</option>
                            
                          </select>
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
