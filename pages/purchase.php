<?php
if(isset($_GET['id'])){

$package_id = $_GET['id'];
$package_detail = $code->get_package_by_id($package_id);
$package_detail = mysqli_fetch_assoc($package_detail);
if($package_detail['image'] != ""){
$image_src = $base_url.'admin/assets/images/package_images/'.$package_detail['image'];
}else{
$image_src = $base_url.'admin/assets/images/site_images/no_profile.jpg';
}
}
else if($is_login !== TRUE){
	echo '<script>window.location.hreg="'.$base_url.'"</script>';
}
else{
	echo '<script>window.location.hreg="'.$base_url.'"</script>';
}
?>
<style type="text/css">
	.price_p{
		float: right;
    margin-top: -37px;
    font-size: 37px;
    font-weight: bold;
    color: #ab1e32;
	}
</style>

<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4" id="about">
    <div id="content-with-photo4-block" class="py-5"> 
        <div class="container py-md-3">
            <div class="cwp4-two row">
               
                <div class="cwp4-text col-lg-8">
                   <h3>Purchase Package</h3>
                   <br>
             		<form method="post" style="margin: 30px">
             			<input type="hidden" name="package_id" id="package_id" value="<?=$package_detail['id']?>">
             			<input type="hidden" name="user_id" id="user_id" value="<?=$user_id?>">
             			<label>Package Name</label>
             			<input type="text" name="" class="form-control" value="<?=$package_detail['title']?>" readonly="">
             			<label>Package Price</label>
             			<input type="text" name="" class="form-control" value="$<?=$package_detail['price']?>" readonly="">
             			<br>
             			<label>Post Link i.e where you want to use our services</label>
             			<br>
                   		<span style="color: red;display: none;" class="link_error">Please enter your post link</span>

             			<input type="text" name="post_link" id="post_link" class="form-control">
             			<br>
                   		<h4>Contact Information</h4>
             			<br>

                   		<label>Email</label>
                   		<br>
                   		<span style="color: red;display: none;" class="email_error">Please enter your email</span>
             			<input type="email" name="user_email" id="user_email" class="form-control" required="">
             			<label>Contact No.</label>
                   		<br>

                   		<span style="color: red;display: none;" class="phone_error">Please enter your contact no</span>

             			<input type="text" name="user_phone" id="user_phone" class="form-control">
             			<br>
             			<ul>
             				<li style="color: red;">Payment method will be integrated later. Thankyou</li>
             			</ul>  
             </form>

                </div>
              
            </div>

            <div class="text-right"style="margin: 15px;">
             
                     <button class="btn btn-secondary btn-theme2" onclick="purchase();">Purchase</button>
                   
            </div>

        </div>
    </div>
</section>

<!-- <section class="w3l-content-with-photo-4" id="about">
    <div id="content-with-photo4-block" class="py-5"> 
        <div class="container py-md-3">
            <div class="cwp4-two row">
    
                <div class="cwp4-text col-lg-12 pl-lg-5 mt-lg-0 mt-5">
                        <h3>Our mission.</h3>
                   
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et perspiciatis unde omnis iste natus error sit voluptatemerror sit voluptatem</p>
                    <ul class="cont-4">
                        <li><span class="fa fa-check"></span>We make auto repair more convenient for you</li>
                        <li><span class="fa fa-check"></span>We get the job done right — the first time </li>
                        <li><span class="fa fa-check"></span>Proven Results for Setting Exceptional Standards</li>
                        <li><span class="fa fa-check"></span>Same day service for most repairs </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section> -->

