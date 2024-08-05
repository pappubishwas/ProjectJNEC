<?php
include('../config/Database.php');
$result = mysqli_query($con,"SELECT * FROM t_user_details");
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
            <h4 class="alert alert-info">Manage Users Details</h4>
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
                  <th>Sl No.</th>
                  <th style="display: none;">Id</th>
                  <th>Email</th>
                  <th>CID</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Role</th>
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
                    <td><?php echo $row["User_Id"]; ?></td>
                    <td><?php echo $row["CID"]; ?></td>
                    <td><?php echo $row["Full_Name"]; ?></td>
                    <td><?php echo $row["Contact_Number"]; ?></td>
                    <td><?php echo $row["Role_Id"]; ?></td>
                    <td>
                       <button type="button" class="btn btn-danger btn-block"><a href="delete_users.php?Id=<?php echo $row["Id"]; ?>">Delete</a></button>
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
?>      </div>
  </div>
  </div>
  </div>
</div>
</div>
</form>

    <?php include('adminfooter.php')?>

</body>
</html>
