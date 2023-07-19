<?php
include "nav.php";
?>
<form action="save_slider.php" method="post" enctype="multipart/form-data">
<div class="container-fluid mt-2">
	<div class="row">
		<div class="col-md-12">
			<h3>Manage Slider</h3>
		</div>
		<div class="col-md-3 mb-3">
			<label>Slider Image</label>
			<input type="file" name="slider_image" class="form-control" required>
		</div>
		<div class="col-md-4 mb-3">
			<label>Slider Heading</label>
			<input type="text" name="slider_heading" class="form-control">
		</div>
		<div class="col-md-5 mb-3">
			<label>Slider Title</label>
			<input type="text" name="slider_title" class="form-control">
		</div>
		<div class="col-md-12 text-right mb-3">
			<button class="btn btn-dark ">SAVE SLIDER</button>
		</div>

	</div>
</div>
</form>
<?php
$slider_data=mysqli_query($conn,"SELECT * FROM slider");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>
					<th>SN</th>
					<th>Image</th>
					<th>Heading</th>
					<th>Title</th>
				</tr>
				<?php
				foreach($slider_data as $key => $row){
				?>
				<tr>
					<td><?=$key+1?></td>
					<td><img src="uploads/<?=$row['slider_image']?>" width="200px"></td>
					<td><?=$row['slider_heading']?></td>
					<td><?=$row['slider_title']?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>


<?php
	include "footer.php";
?>