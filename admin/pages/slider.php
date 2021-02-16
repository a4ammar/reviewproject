<?php
if(isset($_POST['submit'])){

 $title = $_POST['title'];
 $image_name = $code->upload_image();
 $query = $code->save_slider_image($image_name,$title);
 if($query === 'Success'){
 	$msg = "<div class='alert alert-success' role='alert'>Record Added Succesfully</div>";
 }else{
 	$msg = "<div class='alert alert-danger' role='alert'>Something Went Wrong!</div>";
 }
}
$slider_images = $code->get_slider_images();
?>
		<h3>Slider</h3>
		<br />			
		<br />		
		<form method="POST" enctype="multipart/form-data">	
			
		<div class="row">
			<div class="col-md-12" >
				<?php
				if(isset($msg)){
					echo $msg;
				}
				?>
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-md-3">
							<label>Title</label>
						</div>
						<div class="col-md-8">
							<input type="text" name="title" class="form-control">
						</div>
					</div>	
					<br>
					<br>
				<div class="form-group">
					<div class="col-md-3">
						<label>Upload Image</label>
					</div>
					<div class="col-md-8">
						<input type="file" name="image" class="form-control">
					</div>
					<br>
					<br>
					<br>
					<div class="col-md-12" style="text-align: center;">
						<button type="submit" name="submit" class="btn btn-info" style="float: right;">UPLOAD</button>					
					</div>
				</div>					
			</div>		
	
		</div>
		</div>
	</form>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Slider Images</h3>
		<br />			
		
		<table class="table table-bordered datatable" id="table-4">
			<thead>
				<tr>
					<th>No.</th>
					<th>Title</th>
					<th>Image</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<?php
$count = 1;
while ($data = mysqli_fetch_assoc($slider_images)) {
?>
				<tr class="odd gradeX">
					<td><?=$count;?></td>
					<td><?=$data['title'];?></td>
					<td><img src="<?=$base_url;?>assets/images/site_images/<?=$data['image'];?>" style="height: 150px;width: 150px;"></td>
					<td><?=$data['added_on'];?></td>
					<td>
						<button class="btn btn-danger" onclick="delete_record('<?=$data['id'];?>','slider_images')">Delete</button>
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




