<?php
$orders = $code->get_orders();
?>
		<div class="row">
			<div class="col-md-12">
				<h3>Orders</h3>
		<br />			
		
		<table class="table table-bordered datatable" id="table-4">
			<thead>
				<tr>
					<th>No.</th>
					<th>Username</th>
					<th>Package</th>
					<th>Order Price</th>
					<th>Link</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Status</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<?php
$count = 1;
while ($data = mysqli_fetch_assoc($orders)) {

?>
				<tr class="odd gradeX">
					<td><?=$count;?></td>
					<td><?=$data['user_id'];?></td>
					<td><?=$data['package_id'];?></td>
					<td>$<?=$data['order_price'];?></td>
					<td><?=$data['post_link'];?></td>
					<td><?=$data['user_email'];?></td>
					<td><?=$data['user_phone'];?></td>
					<td><?=$data['status'];?></td>
					<td><?=$data['added_on'];?></td>
					<td>
						<button class="btn btn-danger" onclick="delete_record('<?=$data['id'];?>','orders')">Delete</button>
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




