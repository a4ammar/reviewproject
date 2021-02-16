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
}else{
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
               
                <div class="cwp4-text col-lg-6">
                   <h3><?=$package_detail['title']?></h3>
                   
                   <p class="price_p" style="float: right;margin-top: -37px;font-size: 37px;font-weight: bold;color: #ab1e32;"> 
                   	$<?=$package_detail['price']?>
                   	</p>
                   	<br>
                    <?=$package_detail['description'];?>          
                </div>
                <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="<?=$image_src;?>" class="img-fluid" alt="" />
                </div>
            </div>

                <?php 
                if($is_login === TRUE && $user_type == 1){ ?>
                	
                <div class="text-right"style="margin: 15px;">
             		<a href="<?=$base_url;?>purchase.htm?id=<?=$package_detail['id']?>">
                     <button class="btn btn-secondary btn-theme2" type="submit" name="submit">Buy Now</button>
                 	</a>
                 </div>
             <?php }else{ ?>
             	<ul style="margin: 20px;color: #ab1e32;">
                	<li>Please register yourself first with a buyer account if you want this package.</li>
                </ul>
                <div class="clearfix"></div>
             	<div class="text-right"style="margin: 15px;">
             		<a href="<?=$base_url;?>register.htm">
                     <button class="btn btn-secondary btn-theme2" type="submit" name="submit">Buy Now</button>
                     </a>
                 </div>
             <?php } ?>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4" id="about">
    <div id="content-with-photo4-block" class="py-5"> 
        <div class="container py-md-3">
            <div class="cwp4-two row">
              <!--  <div class="cwp4-image col-lg-6">
                    <img src="assets/images/g5.jpg" class="img-fluid" alt="" />
                </div> -->
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
</section>
<!-- content-with-photo4 block -->
<section class="w3l-features-5">
	<!-- /features -->
		<div class="features py-5">
            <div class="container py-md-3">
			
			<div class="fea-gd-vv row ">	
			   <div class="float-lt feature-gd col-lg-4 col-sm-6">	
					
					 <div class="icon-info">
						<h5>Our History 1998</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
						</p>
					</div>
					 
				</div>	
				<div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">	
					
					 <div class="icon-info">
						<h5>Over 100 Key milestones</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
						</p>
					</div>
			 </div> 
				<div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-4">	
					
					 <div class="icon-info">
						<h5>120 Customer service</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
						</p>
					</div>
			 </div>	 
			 	
		</div>  
		 </div>
	   </div>
   <!-- //features -->
</section>
<!--/team-sec-->
	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="heading text-center mx-auto">
					<h3 class="head">Our Farmers</h3>
					<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
					  Nulla mollis dapibus nunc, ut rhoncus
					  turpis sodales quis. Integer sit amet mattis quam.</p>
					  
					</div>
					<div class="row team-row pt-3 mt-5">
							<div class="col-lg-3 col-sm-6 team-wrap">
									<div class="team-info">
										<div class="column position-relative">
											<a href="#url"><img src="assets/images/t1.jpg" alt="" class="img-fluid team-image" /></a>
										</div>
										<div class="column-btm">
											<h3 class="name-pos"><a href="#url">Mickel Zaman</a></h3>
											<p>Organic Farmer</p>
											<div class="social">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
											</div>
									</div>
								</div>
							</div>
							<!-- end team member -->
				
							<div class="col-lg-3 col-sm-6 team-wrap mt-sm-0 pt-sm-0 mt-4 pt-2">
			
									<div class="team-info">
											<div class="column position-relative">
												<a href="#url"><img src="assets/images/t2.jpg" alt="" class="img-fluid team-image" /></a>
											</div>
											<div class="column-btm">
												<h3 class="name-pos"><a href="#url">Paul Croves</a></h3>
												<p>Organic Farmer</p>
												<div class="social">
													<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
													<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												</div>
										</div>
									</div>
							</div>
							<!-- end team member -->
				
							<div class="col-lg-3 col-sm-6 team-wrap mt-lg-0 pt-lg-0 mt-4 pt-2">
									<div class="team-info">
											<div class="column position-relative">
												<a href="#url"><img src="assets/images/t3.jpg" alt="" class="img-fluid team-image" /></a>
											</div>
											<div class="column-btm">
												<h3 class="name-pos"><a href="#url">Ricardo Spencer</a></h3>
												<p>Organic Farmer</p>
												<div class="social">
													<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
													<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												</div>
										</div>
									</div>
								
							</div>
							<!-- end team member -->
							<!-- end team member -->
				
							<div class="col-lg-3 col-sm-6 team-wrap mt-lg-0 pt-lg-0 mt-4 pt-2">
			
									<div class="team-info">
											<div class="column position-relative">
												<a href="#url"><img src="assets/images/t4.jpg" alt="" class="img-fluid team-image" /></a>
											</div>
											<div class="column-btm">
												<h3 class="name-pos"><a href="#url">Marko Dugonji</a></h3>
												<p>Organic Farmer</p>
												<div class="social">
													<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
													<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												</div>
										</div>
									</div>
							</div>
							<!-- end team member -->
							<div class="col-lg-3 col-sm-6 team-wrap mt-4 pt-2">
									<div class="team-info">
										<div class="column position-relative">
											<a href="#url"><img src="assets/images/t5.jpg" alt="" class="img-fluid team-image" /></a>
										</div>
										<div class="column-btm">
											<h3 class="name-pos"><a href="#url">Anthony</a></h3>
											<p>Organic Farmer</p>
											<div class="social">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
											</div>
									</div>
								</div>
							</div>
							<!-- end team member -->
				
							<div class="col-lg-3 col-sm-6 team-wrap mt-4 pt-2">
			
									<div class="team-info">
											<div class="column position-relative">
												<a href="#url"><img src="assets/images/t6.jpg" alt="" class="img-fluid team-image" /></a>
											</div>
											<div class="column-btm">
												<h3 class="name-pos"><a href="#url">Emma Stone</a></h3>
												<p>Organic Farmer</p>
												<div class="social">
													<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
													<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												</div>
										</div>
									</div>
							</div>
							<!-- end team member -->
				
							<div class="col-lg-3 col-sm-6 team-wrap mt-4 pt-2">
									<div class="team-info">
											<div class="column position-relative">
												<a href="#url"><img src="assets/images/t7.jpg" alt="" class="img-fluid team-image" /></a>
											</div>
											<div class="column-btm">
												<h3 class="name-pos"><a href="#url">Rhoda Byrd</a></h3>
												<p>Organic Farmer</p>
												<div class="social">
													<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
													<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												</div>
										</div>
									</div>
								
							</div>
							<!-- end team member -->
							<!-- end team member -->
				
							<div class="col-lg-3 col-sm-6 team-wrap mt-4 pt-2">
			
									<div class="team-info">
											<div class="column position-relative">
												<a href="#url"><img src="assets/images/t8.jpg" alt="" class="img-fluid team-image" /></a>
											</div>
											<div class="column-btm">
												<h3 class="name-pos"><a href="#url">Max Stoiber</a></h3>
												<p>Organic Farmer</p>
												<div class="social">
													<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
													<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												</div>
										</div>
									</div>
							</div>
							<!-- end team member -->
				</div>
			</div>
	</section>
	<!--//team-sec-->
