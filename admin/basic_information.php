<?php
include "nav.php";
?>
<style type="text/css">
	label{
		padding: 0px;
		margin: 0px;
	}
</style>

<h1>Welcome to Basic information</h1>
<?php
$res=mysqli_query($conn,"SELECT * FROM hospital_information");
foreach ($res as $key => $row)
{
?>
<form action="save_basic_information.php" method="post" enctype="multipart/form-data">
	<div class="container-fluid mt-2">
		<div class="row">
			<div class="col-md-12">
				<h2>Basic Information</h2>
			</div>
			<div class="col-md-6 mb-3">
				<label>Hospital Name</label>
				<input type="text" name="hospital_name" value="<?=$row['hospital_name']?>"  class="form-control" >
			</div>
			<div class="col-md-4 mb-3">
				<label>Hospital Logo</label>
				<input type="file" name="hospital_logo" class="form-control">
			</div>
			<div class="col-md-2 mb-3">
				<img src="uploads/<?=$row['hospital_logo']?>" width="100%">
			</div> 
			<div class="col-md-6 mb-3">
				<label>Hospital Mobile</label>
				<input type="number" name="hospital_mobile" value="<?=$row['hospital_mobile']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				<label>Hospital Email</label>
				<input type="email" name="hospital_email" value="<?=$row['hospital_email']?>" class="form-control" >
			</div>
			<div class="col-md-6 mb-3">
				<label>Webpage Heading</label>
				<input type="text" name="webpage_heading" value="<?=$row['webpage_heading']?>" class="form-control" >
			</div>
			<div class="col-md-6 mb-3">
				<label>Address</label>
				<textarea name="hospital_address" class="form-control">
					<?=$row['hospital_address']?>
				</textarea>
			</div>
			<div class="col-md-3 mb-3">
				<label>Enter Twitter Link</label>
				<input type="text" name="twitter_link" value="<?=$row['twitter_link']?>" class="form-control" >
			</div>
			<div class="col-md-3 mb-3">
				<label>Enter Facebook Link</label>
				<input type="text" name="facebook_link" value="<?=$row['facebook_link']?>" class="form-control" >
			</div>
			<div class="col-md-3 mb-3">
				<label>Enter Linkdin Link</label>
				<input type="text" name="linkdin_link" value="<?=$row['linkdin_link']?>" class="form-control">
			</div>
			<div class="col-md-3 mb-3">
				<label>Enter Instagram Link</label>
				<input type="text" name="instagram_link" value="<?=$row['instagram_link']?>" class="form-control">
			</div>
			<div class="col-md-12 mb-3 mb-3 text-right">
				<button class=" btn btn-dark">SAVE BASIC INFORMATION</button>
			</div>
		</div>
		
	</div>
</form>
<?php
}
?>
<?php

?>

<?php
include "footer.php";
?>