<?php
include "nav.php";
?>
<form action="save_master_service.php" method="post" enctype="multipart/form-data">
	<div class="container-fluid mt-2">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h3>Master Services</h3>
			</div>
			<div class="col-md-5 mb-3">
				<label>Enter Service Name</label>
				<input type="text" name="master_service_name" class="form-control">
			</div>
			<div class="col-md-5 mb-3">
				<label>Enter Service Image</label>
				<input type="file" name="master_service_image" required class="form-control">
			</div>
			<div class="col-md-2 mb-3"><BR>
				<button class="btn btn-dark w-100">SAVE SERVICE</button>
			</div>
		</div>
	</div>
</form>

<?php
$master_service_data=mysqli_query($conn,"SELECT * FROM master_service");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>
					<th>SN</th>
					<th>Name</th>
					<th>Image</th>
					<th></th>
					<th></th>
				</tr>
				<?php
				foreach($master_service_data as $key => $row){
				?>
				<tr>
					<td><?=$key+1?></td>
					<td><?=$row['master_service_name']?></td>
					<td><img src="uploads/<?=$row['master_service_image']?>" width="200px"></td>
					<td>
						<a href=""><button class="btn btn-dark">Edit</button></a>
					</td>
					<td>
						<a href=""><button class="btn btn-dark">Delete</button></a>
					</td>
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