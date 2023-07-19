<?php 
include "connection.php";
 ?>

<?php
// echo "<pre>";
// // print_r($_POST);
// print_r($_FILES);
// echo "</pre>";
extract($_FILES);
if($_FILES['hospital_logo']['name']!="")
{
$logo_name=time().$_FILES['hospital_logo']['name'];
move_uploaded_file($_FILES['hospital_logo']['tmp_name'],'uploads/'.$logo_name);
}
extract($_POST);

// $sql="INSERT INTO hospital_information(	hospital_name,hospital_logo,hospital_mobile,hospital_email,webpage_heading,hospital_address,twitter_link,facebook_link,linkdin_link,instagram_link) VALUES
// 	('$hospital_name','$logo_name','$hospital_mobile','$hospital_email','$webpage_heading','$hospital_address','$twitter_link','$facebook_link','$linkdin_link','$instagram_link')";

if($_FILES['hospital_logo']['name']!="")
{
	$sql="UPDATE hospital_information SET 
			hospital_name='$hospital_name',
			hospital_logo='$logo_name',
			hospital_mobile='$hospital_mobile',
			hospital_email='$hospital_email',
			webpage_heading='$webpage_heading',
			hospital_address='$hospital_address',
			twitter_link='$twitter_link',
			facebook_link='$facebook_link',
			linkdin_link='$linkdin_link',
			instagram_link='$instagram_link' WHERE hospital_id='1' ";
}
else
{
	$sql="UPDATE hospital_information SET 
			hospital_name='$hospital_name',
			hospital_mobile='$hospital_mobile',
			hospital_email='$hospital_email',
			webpage_heading='$webpage_heading',
			hospital_address='$hospital_address',
			twitter_link='$twitter_link',
			facebook_link='$facebook_link',
			linkdin_link='$linkdin_link',
			instagram_link='$instagram_link' WHERE hospital_id='1' ";
}
echo "<pre>";
echo $sql;
echo "</pre>";

$res=mysqli_query($conn,$sql);
if($res)
{
	header ('location:basic_information.php');
	echo "Data Updated";
}
else
{
	mysqli_error();
	echo "Failed To Update";
}











?>