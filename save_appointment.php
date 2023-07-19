<?php
include "admin/connection.php";
// print_r($_POST);
extract($_POST);

// $sql="CREATE TABLE customer_appointment (customer_appointment_id INT PRIMARY KEY AUTO_INCREMENT, master_service_id INT, master_doctor_id INT, customer_name TEXT, customer_email TEXT, appointment_date TEXT, appointment_time TEXT)";

$sql="INSERT INTO customer_appointment (master_service_id, master_doctor_id, customer_name, customer_email, appointment_date, appointment_time) VALUES 
	('$master_service_id', '$master_doctor_id', '$customer_name', '$customer_email', '$appointment_date', '$appointment_time')";

mysqli_query($conn,$sql);

// print_r($_SERVER['HTTP_REFERER']);
header('location:'.$_SERVER['HTTP_REFERER']);

// echo "
// 	<script>
// 		alert('Appointment Confirm');
// 		window.history.back();
// 	</script>
	// "


?>