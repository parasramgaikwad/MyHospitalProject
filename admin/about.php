<?php
include "nav.php";
?>
<?php
$res=mysqli_query($conn, "SELECT * FROM hospital_about");
$about_det=mysqli_fetch_assoc($res);
?>
<form action="save_about_info.php" method="post" enctype="multipart/form-data">
	<div class="container-fluid mt-3">
		<div class="row">
			<div class=" mb-3 col-md-12">
				<h3>About Information</h3>
			</div>
			<div class="mb-3 col-md-6">
				<label>About Title</label>
				<input type="text" name="about_title" value="<?=$about_det['about_title']?>" class="form-control">	
			</div>
			<div class="mb-3 col-md-6">
				<label>About Sub-Title</label>
				<input type="text" name="about_sub_title" value="<?=$about_det['about_sub_title']?>" class="form-control">
			</div>
			<div class="mb-3 col-md-7">
				<label>About Details</label>
				<textarea name="about_details" class="form-control"><?=$about_det['about_details']?></textarea>
			</div>
			<div class="mb-3 col-md-3">
				<label>About Image</label>
				<input type="file" name="about_image" class="form-control">
			</div>
			<div class=" col-md-2 mb-3">
				<img src="uploads/<?=$about_det['about_image']?>" width="100%">
			</div>
			<div class="mb-3 col-md-3">
				<label>About Head 1</label>
				<input type="text" name="about_head1" value="<?=$about_det['about_head1']?>" class="form-control">
			</div>
			<div class="mb-3 col-md-3">
				<label>About Head 2</label>
				<input type="text" name="about_head2" value="<?=$about_det['about_head2']?>" class="form-control">
			</div>
			<div class="mb-3 col-md-3">
				<label>About Head 3</label>
				<input type="text" name="about_head3" value="<?=$about_det['about_head3']?>" class="form-control">
			</div>
			<div class="mb-3 col-md-3">
				<label>About Head 4</label>
				<input type="text" name="about_head4" value="<?=$about_det['about_head4']?>" class="form-control">
			</div>
			<div class="col-md-12 text-right">
				<button class="btn btn-dark">SAVE ABOUT</button>
			</div>

		</div>
	</div>
</form>













<?php
include "footer.php";
?>