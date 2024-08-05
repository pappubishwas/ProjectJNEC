<?php
include('../config/Database.php');
if(isset($_POST['save']))
{	 
	 $std_number = $_POST['std_number'];
	 $std_name = $_POST['std_name'];
	 $std_gender = $_POST['std_gender'];
	 $std_program = $_POST['std_program'];

	 $sql = "INSERT INTO t_student (std_number,std_name,std_gender,std_program)
	 VALUES ('$std_number','$std_name','$std_gender','$std_program')";
	 if (mysqli_query($con, $sql)) {
	 	header('Location: message.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>