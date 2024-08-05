<?php
include('../config/Database.php');
$sql = "DELETE FROM t_student WHERE Id='" . $_GET["Id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header('Location: liststudent.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>