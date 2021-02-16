<?php
if(isset($_POST)){

$query = $code->save_preferences($_POST);

}
?>
		<h3>Site Preferences</h3>
		<br />			
		<br />		
		<form method="POST">	
			<button type="submit" class="btn btn-info" style="float: right;margin-top: -61px;margin-right: 41px;">Save</button>
		<div class="row">
			<div class="col-md-12" >
				<div class="col-md-6">
				<div class="form-group">
					<div class="col-md-3">
						<label>Site Name</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="site_name" class="form-control" value="<?=$code->get_preferences('site_name')?>">
					</div>
				</div>
				<br><br><br>			
				<div class="form-group">
					<div class="col-md-3">
						<label>Site Email</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="site_email" class="form-control" value="<?=$code->get_preferences('site_email')?>">
					</div>
				</div>
				<br><br><br>					
				<div class="form-group">
					<div class="col-md-3">
						<label>Site Contact No.</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="site_contact" class="form-control" value="<?=$code->get_preferences('site_contact')?>">
					</div>
				</div>
				<br><br><br>
				<div class="form-group">												
					<div class="col-md-3">
						<label>CopyRight Text</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="copyright_text" class="form-control" required="" value="<?=$code->get_preferences('copyright_text')?>">
						
					</div>
				</div>			
					
			</div>		
			<div class="col-md-6">
				<div class="form-group">
					<div class="col-md-3">
						<label>Site Facebook Link</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="site_facebook" class="form-control" value="<?=$code->get_preferences('site_facebook')?>">
					</div>
				</div>
				<br><br><br>			
				<div class="form-group">
					<div class="col-md-3">
						<label>Site Instagram Link</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="site_instagram" class="form-control" value="<?=$code->get_preferences('site_instagram')?>">
					</div>
				</div>
				<br><br><br>					
				<div class="form-group">
					<div class="col-md-3">
						<label>Site Twitter Link</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="site_twitter" class="form-control" value="<?=$code->get_preferences('site_twitter')?>">
					</div>
				</div>
				<br><br><br>			
				
			
			</div>
		</div>
		</div>

		&nbsp;&nbsp;&nbsp;<h3>Footer Preferences</h3>
		<br />			
		<br />
		<div class="row">
		<div class="col-md-12" >
			<div class="col-md-4">
				<h3>Featured Links</h3>
				<br />
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 1</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="link_1_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('link_1_title')?>">
						<input type="url" name="link_1_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('link_1_url')?>">
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 2</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="link_2_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('link_2_title')?>">
						<input type="url" name="link_2_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('link_2_url')?>">
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 3</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="link_3_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('link_3_title')?>">
						<input type="url" name="link_3_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('link_3_url')?>">
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 4</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="link_4_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('link_4_title')?>">
						<input type="url" name="link_4_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('link_4_url')?>">
					</div>
				</div>
				<br><br><br><br>	
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 5</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="link_5_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('link_5_title')?>">
						<input type="url" name="link_5_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('link_5_url')?>">
					</div>
				</div>
				<br><br><br><br>											
			</div>
			<div class="col-md-4">
				<h3>Newsletter</h3>
				<br />
				<div class="form-group">
					<div class="col-md-3">
						<label>Newsletter Title</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="newsletter_title" class="form-control" value="<?=$code->get_preferences('newsletter_title')?>" required="">
					</div>
				</div>
				<br><br><br>			
				<div class="form-group">
					<div class="col-md-3">
						<label>Newsletter Description</label>
					</div>
					<div class="col-md-6">
						 <!-- <input type="text" name="newsletter_description" class="form-control" style="width: 260px; height: 176px;" value="<?=$code->get_preferences('newsletter_description')?>"> -->
						<textarea class="form-control" name="newsletter_description" required="" style="width: 260px; height: 176px;"><?=$code->get_preferences('newsletter_description')?></textarea>
					</div>
				</div>
				<br><br><br>													
			</div>
			<div class="col-md-4">
				<h3>Quick Links</h3>
				<br />
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 1</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="quick_link_1_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('quick_link_1_title')?>">
						<input type="url" name="quick_link_1_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('quick_link_1_url')?>">
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 2</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="quick_link_2_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('quick_link_2_title')?>">
						<input type="url" name="quick_link_2_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('quick_link_2_url')?>">
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 3</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="quick_link_3_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('quick_link_3_title')?>">
						<input type="url" name="quick_link_3_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('quick_link_3_url')?>">
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 4</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="quick_link_4_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('quick_link_4_title')?>">
						<input type="url" name="quick_link_4_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('quick_link_4_url')?>">
					</div>
				</div>
				<br><br><br><br>	
				<div class="form-group">												
					<div class="col-md-4">
						<label>Link 5</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="quick_link_5_title" class="form-control" placeholder="Title" required="" value="<?=$code->get_preferences('quick_link_5_title')?>">
						<input type="url" name="quick_link_5_url" class="form-control" placeholder="URL" value="<?=$code->get_preferences('quick_link_5_url')?>">
					</div>
				</div>
				<br><br><br><br>											
			</div>
		
		</div>
		</div>

	</form>



