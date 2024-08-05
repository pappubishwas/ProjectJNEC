<?php
include('../config/Database.php');
if(!isset($_SESSION['Id'],$_SESSION['Role_Id']))
	{
		header('location:index.php');
	}
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>

<?php include('admincss.php')?>
<?php include('adminheader.php')?>
<form method="post" >
<div id="wrapper">
	<?php include('navbar.php')?>
	<div id="page-wrapper">
			<div class="row">
			<div class="col-lg-12">
			</div>
		<?php include('dashboarddetails.php')?>
			</div>
	</div>

		<?php include('adminfooter.php')?>

</body>
</html>
