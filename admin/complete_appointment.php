<?php
include "connection.php";
extract($_GET);
$sql="UPDATE customer_appointment SET status='complete' WHERE
		customer_appointment_id='$appointment_id'";

mysqli_query($conn,$sql);
header('location:index.php');

// print_r($_GET);
?>