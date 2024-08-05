<?php
include('../config/Database.php');
if(isset($_POST['save']))
{	 
	 $CID = $_POST['CID'];
	 $Full_Name = $_POST['Full_Name'];
	 $User_Id = $_POST['User_Id'];
	 $Contact_Number = $_POST['Contact_Number'];
	 $Role_Id = $_POST['Role_Id'];
	 $Password = $_POST['Password'];

	 $sql = "INSERT INTO t_user_details (CID,Full_Name,User_Id,Contact_Number,Role_Id,Password)
	 VALUES ('$CID','$Full_Name','$User_Id','$Contact_Number','$Role_Id','$Password')";
	 if (mysqli_query($con, $sql)) {
	 	header('Location: message.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>