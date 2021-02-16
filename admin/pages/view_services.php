<?php
$packages = $code->get_packages();
?>
		<div class="row">
			<div class="col-md-12">
				<h3>Packages</h3>
		<br />			
		
		<table class="table table-bordered datatable" id="table-4">
			<thead>
				<tr>
					<th>No.</th>
					<th>Title</th>
					<th>Price</th>
					<th>Image</th>
					<th>Description</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<?php
$count = 1;
while ($data = mysqli_fetch_assoc($packages)) {
	if($data['image'] != ""){
		$image_src = $base_url.'assets/images/package_images/'.$data['image'];
	}else{
		$image_src = $base_url.'assets/images/site_images/no_profile.jpg';
	}
?>
				<tr class="odd gradeX">
					<td><?=$count;?></td>
					<td><?=$data['title'];?></td>
					<td><?=$data['price'];?></td>
					<td><img src="<?=$image_src;?>" style="height: 150px;width: 150px;"></td>
					<td><?=$data['description'];?></td>
					<td><?=$data['created_at'];?></td>
					<td>
						<button class="btn btn-danger" onclick="delete_record('<?=$data['id'];?>','packages')">Delete</button>
						<button class="btn btn-info">Edit</button>
					</td>

				</tr>
<?php
$count ++;
}
?>
			
			</tbody>
		</table>
			</div>
		</div>




