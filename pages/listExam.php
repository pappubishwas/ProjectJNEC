<?php
include('../config/Database.php');
$result = mysqli_query($con,"SELECT * FROM t_student");
?>
<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form method="post" >
<div id="wrapper">
  <?php include('navbar.php')?>
  <div id="page-wrapper">
    <br>
     <div class="card">
          <div class="card-header">
            <h4 class="alert alert-info">Manage Exam Cell Details</h4>
          </div>
    <div class="card-body">
      <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <label>Select Program Name</label>
                      <select name="Program_Id" id="Program_Id" class="form-control" placeholder="Role">
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
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Select Semester</label>
                    <select name="Program_Id" id="Program_Id" class="form-control" placeholder="Role">
                            <option value=""> Select</option>
                            <option value="Semester I">Semester I</option>
                            <option value="Semester II">Semester II</option>
                            <option value="Semester III">Semester III</option>
                            <option value="Semester IV">Semester IV</option>
                            <option value="Semester V">Semester V</option>
                            <option value="Semester VI">Semester VI</option>
                            <option value="Semester VII">Semester VII</option>
                            <option value="Semester VIII">Semester VIII</option>
                          </select>
                  </div>
                </div>
                </div>
                <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php
          if (mysqli_num_rows($result) > 0) {
          ?>
          <table id="sliderDetails" class="table table-bordered table-striped">
              <thead>
                <tr>
                 <th>Sl No.</th>
                  <th style="display: none">Id</th>
                  <th>Student Name</th>
                  <th>Student No.</th>
                  <th>Gender</th>
                  <th>Programme</th>
                  <th>Status(Exam-Cell)</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              $i=0;
              while($row = mysqli_fetch_array($result)) {
              ?>
              <tbody>
                  <tr>
                    <td><?=$i+1?></td>
                    <td style="display: none;"><?php echo $row["Id"]; ?></td>
                    <td><?php echo $row["std_name"]; ?></td>
                    <td><?php echo $row["std_number"]; ?></td>
                    <td><?php echo $row["std_gender"]; ?></td>
                    <td><?php echo $row["std_program"]; ?></td>
                    <td><?php echo $row["examcell_status"]; ?></td>
                    <td>
                       <button type="button" class="btn btn-info btn-block"><a href="update-ec.php?Id=<?php echo $row["Id"]; ?>">Update</button>
                    </td>
                  </tr>
              </tbody>
                  
          <?php $i++;} ?>
          </table>
           <?php
}
else{
    echo "No result found";
}
?>
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
