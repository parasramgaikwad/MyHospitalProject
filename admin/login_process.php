<?php
session_start();
include "connection.php";

echo "<pre>";
// print_r($_POST);
echo "</pre>";
extract($_POST);
$admin_password=md5($admin_password);

$sql="SELECT * FROM admin_tbl WHERE admin_email='$admin_email' AND
		admin_password='$admin_password' ";
$data=mysqli_query($conn,$sql);

if(mysqli_num_rows($data)>0)
{
	$admin=mysqli_fetch_assoc($data);
	print_r($admin);
	$_SESSION['hospital_admin_id']=$admin['admin_tbl_id'];
	$_SESSION['hospital_admin_name']=$admin['admin_tbl_name'];
	header('location:index.php');
}
else
{
	echo "<script>
			alert('Invalid Details');
			history.back('Invalid Details');
		</script>";
}

?>