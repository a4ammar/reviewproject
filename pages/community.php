<?php
$users = $code->get_users();

?>
<!--/team-sec-->
  <section class="w3l-team-main">
    <div class="team py-5">
      <div class="container py-lg-8">
        <div class="heading text-center mx-auto">
          <h3 class="head">Our Community Provide Best and Quick Services</h3>
        <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Nulla mollis dapibus nunc, ut rhoncus
          turpis sodales quis. Integer sit amet mattis quam.</p>
            
          </div>
          <div class="row team-row pt-3 mt-5">
<?php
$count = 1;
while ($user = mysqli_fetch_assoc($users)) {
  $name = $user['name'];
  if($name == ""){
    $name = "No name to display";
  }
  $services = $user['services'];
  if($services == ""){
    $name = "No services to display";
  }
  if($user['profile_image'] != ""){
    $image_src = $base_url.'admin/assets/images/profile_images/'.$user['profile_image'];
  }else{
    $image_src = $base_url.'admin/assets/images/site_images/no_profile.jpg';

  }
?>
              <div class="col-lg-4 col-sm-4 team-wrap">
                  <div class="team-info">
                    <div class="column position-relative">
                      <a href="#url"><img src="<?=$image_src;?>" alt="" class="img-fluid team-image" height="250" width="300"/></a>
                    </div>
                    <div class="column-btm">
                      <h3 class="name-pos"><a href="#url"><?=$name;?></a></h3>
                      <p><b>Services:</b> <?=$services;?></p>
                      <div class="social">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                      </div>
                  </div>
                </div>
              </div>
<?php } ?>
              <!-- end team member -->       
            
        </div>
      </div>
  </section>
  <!--//team-sec-->
