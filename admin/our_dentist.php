<?php
include "nav.php";
?>


<form action="save_dentist.php" method="post" enctype="multipart/form-data" class="mb-3">
	<div class="container-fluid mt-3">
		<div class="row">
			<div class=" mb-3 col-md-12">
				<h3>Our Dentist</h3>
			</div>
			<div class="mb-3 col-md-3">
				<label>Doctor Image</label>
				<input type="file" name="dentist_image" class="form-control">
			</div>
			<div class=" col-md-2 mb-3">
				<img src="" width="100%">
			</div>
			<div class="col-md-3 mb-3">
				<label>Doctor Name</label>
				<input type="text" name="dentist_name" value="" class="form-control">
			</div>
			<div class="col-md-3 mb-3">
				<label>Doctor Specialist</label>
				<input type="text" name="dentist_specialist" value="" class="form-control">
			</div>

			<div class="mb-3 col-md-3">
				<label>Twitter Link</label>
				<input type="link" name="dentist_twitter_link" value="" class="form-control">
			</div>
			<div class="mb-3 col-md-3">
				<label>Facebook Link</label>
				<input type="text" name="dentist_facebook_link" value="" class="form-control">
			</div>
			<div class="mb-3 col-md-3">
				<label>Linkedin Link</label>
				<input type="text" name="dentist_linkedin_link" value="" class="form-control">
			</div>
			<div class="mb-3 col-md-3">
				<label>Instagram Link</label>
				<input type="text" name="dentist_instagram_link" value="" class="form-control">
			</div>

			<div class="col-md-12 text-right">
				<button class="btn btn-dark">SAVE DENTIST</button>
			</div>
		</div>
	</div>
</form>

<?php
$our_dentist_data=mysqli_query($conn,"SELECT * FROM hospital_our_dentist");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>	
					<th>SN</th>
					<th>Doctor Image</th>
					<th>Doctor Name</th>
					<th>Doctor Specialist</th>
					<th>Twitter Link</th>
					<th>Facebook Link</th>
					<th>Linkedin Link</th>
					<th>Instagram Link</th>
				</tr>
				<?php
				foreach($our_dentist_data as $key => $row){
				?>
				<tr>
					<td><?=$key+1?></td>
					<td><img src="uploads/<?=$row['dentist_image']?>" width="200px"></td>
					<td><?=$row['dentist_name']?></td>
					<td><?=$row['dentist_specialist']?></td>
					<td><?=$row['dentist_twitter_link']?></td>
					<td><?=$row['dentist_facebook_link']?></td>
					<td><?=$row['dentist_linkedin_link']?></td>
					<td><?=$row['dentist_instagram_link']?></td>
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



