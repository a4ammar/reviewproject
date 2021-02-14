<?php
$packages = $code->get_packages();
?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<section class="w3l-news" id="news">
  <section id="grids5-block" class="py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
				<h3 class="head">Providing you the best services at very reasonable price</h3>
				<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				  Nulla mollis dapibus nunc, ut rhoncus
				  turpis sodales quis. Integer sit amet mattis quam.</p>
			  </div>
      <div class="grid-view">
        <div class="row">
<?php
$count = 1;
while ($data = mysqli_fetch_assoc($packages)) {
if($data['image'] != ""){
$image_src = $base_url.'admin/assets/images/package_images/'.$data['image'];
}else{
$image_src = $base_url.'admin/assets/images/site_images/no_profile.jpg';
}
?>
          <div class="col-lg-4 col-md-4 mt-md-4 mt-4">
            <div class="grids5-info">
              <a href="<?=$base_url;?>detail.htm?id=<?=$data['id']?>" class="d-block zoom"><img src="<?=$image_src;?>" alt="" class="img-fluid news-image" style="height: 200px;"></a>
              <div class="blog-info">
                <p class="date">Price: $<?=$data['price'];?></p>
                <h4><a href="<?=$base_url;?>detail.htm?id=<?=$data['id']?>"></a><?=$data['title'];?></h4>
               
                <p class="blog-text"><?=substr($data['description'], 0, 100);?></p>
                <a href="<?=$base_url;?>detail.htm?id=<?=$data['id']?>" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
              </div>
            </div>
          </div>
<?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
