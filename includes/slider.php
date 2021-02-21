<?php
$slider_images = $code->get_slider_images();
?>
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
<?php
$count = 1;
while ($data = mysqli_fetch_assoc($slider_images)) {
?>
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2" style="background: url(<?=$base_url;?>/admin/assets/images/site_images/<?=$data['image'];?>) no-repeat center !important;background-size: cover;">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h4 style="color: white"><?=$data['title'];?></h4>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="contact.htm">Contact Us</a>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
<?php } ?>

    </div>
  </div>

</div>
<!-- <script src="<?=$base_url;?>assets/js/jquery-3.3.1.min.js"></script> -->


<!--   <script src="assets/js/owl.carousel.js"></script>

  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script> -->

</section>