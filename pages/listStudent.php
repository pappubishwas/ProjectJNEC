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
            <h4 class="alert alert-info">Manage Student Details</h4>
          </div>
    <div class="card-body">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php
          if (mysqli_num_rows($result) > 0) {
          ?>
          <table id="sliderDetails" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th >Sl No.</th>
                  <th style="display: none;">Id</th>
                  <th>Student Name</th>
                  <th>Student No.</th>
                  <th style="display: none;">Gender Id</th>
                  <th>Gender</th>
                  <th style="display: none;">Programme Id</th>
                  <th>Programme</th>
                  <th>Student Status</th>
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
                    <td style="display: none;"><?php echo $row["std_gender"]; ?></td>
                    <td><?php echo $row["std_gender"]; ?></td>
                    <td style="display: none;"><?php echo $row["std_program"]; ?></td>
                    <td><?php echo $row["std_program"]; ?></td>
                    <td><?php echo $row["std_status"]; ?></td>
                    <td><a href="delete_process_student.php?Id=<?php echo $row["Id"]; ?>">Delete</a></td>
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

  	
