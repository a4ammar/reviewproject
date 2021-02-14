	<?php
	$query = $code->getUsers();

	?>
		<h3>View Users</h3>
		<br />			
		
		<table class="table table-bordered datatable" id="table-4">
			<thead>
				<tr>
					<th>No</th>
					<th>Profle</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Type</th>
					<th>Created At</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<?php
$count = 0;
while ($users_array = mysqli_fetch_assoc($query)) {
	if($users_array['profile_image'] != ""){
		$image_src = $base_url.'assets/images/profile_images/'.$users_array['profile_image'];
	}else{
		$image_src = $base_url.'assets/images/site_images/no_profile.jpg';

	}
?>
				<tr class="odd gradeX">
					<td><?=$count;?></td>
					<td><img src="<?=$image_src;?>" style="height: 150px;width: 150px;"></td>
					<td><?=$users_array['profile_image'];?></td>
					<td><?=$users_array['email'];?></td>
					<td><?=$users_array['phone'];?></td>
					<td><?=$users_array['address'];?></td>
					<?php
					if($users_array['user_type'] == 0){
						echo '<td><button class="btn btn-success">Seller</button></td>';
					}else{
						echo '<td><button class="btn btn-success">Buyer</button></td>';
					}
					?>
				
					<td><?=$users_array['created_at'];?></td>
					<td>
						<button class="btn btn-danger" onclick="delete_record('<?=$users_array['id'];?>','users')">Delete</button>
						<button class="btn btn-info">Edit</button>
					</td>

				</tr>
<?php
$count++;
}
?>
			
			</tbody>
		</table>
		
		<br />


