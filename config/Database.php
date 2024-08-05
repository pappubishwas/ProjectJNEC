<?php

session_start();

$host = "localhost"; 
$user = "root"; 
$password = "root"; 
$dbname = "projectjnec_db"; 

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

// function getUserAccessRoleByID($id)
// 	{
// 		global $conn;
		
// 		$query = "select Role_Id from t_role where  Id = ".$id;
	
// 		$rs = mysqli_query($conn,$query);
// 		$row = mysqli_fetch_assoc($rs);
		
// 		return $row['Role_Id'];
// 	}



