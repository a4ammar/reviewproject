<?php
include 'includes/config.php';
include 'code/userFunctions.php';
if(isset($_SESSION['user_detail'])){
$user_type = $_SESSION['user_detail']['user_type'];
$user_id = $_SESSION['user_detail']['id'];
$is_login = TRUE;
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Reviewer Website</title>
    <!-- web fonts -->
   <!-- web fonts -->
   <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
   <!-- //web fonts -->
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=$base_url;?>assets/css/style-starter.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- <script src="<?=$base_url;?>assets/js/jquery-3.3.1.min.js"></script> -->
<!-- <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script> -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->



  </head>

<style type="text/css">
.select{
margin-bottom: 30px;
outline: none;
border: 1px solid #eee;
padding: 15px 15px;
font-size: 16px;
line-height: 26px;
color: var(--para-color);
width: 100%;
height: inherit;
background: #f8f9fa;
border-radius: 4px;

}
</style>
  <body>
<?php 
include_once('includes/header.php');
include 'includes/navbar.php';
?>

<?php if($includefile == 'pages/home.php'){
include 'includes/slider.php';
} ?>

<?php @include_once($includefile); ?>
<?php include_once('includes/footer.php'); ?>



<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="<?=$base_url;?>assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="<?=$base_url;?>assets/js/owl.carousel.js"></script>

<!-- script for -->

<!-- <script type="text/javascript">
  Swal.fire({
  title: 'Are you sure to delete this record?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `Confirm`,
  denyButtonText: `Cancel`,
}).then((result) => {
        if (result.value === true) {

        }else{
        }

})
</script>
 --><script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
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
</script>
<!-- //script -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript">
  var base_url = "<?=$base_url;?>";

  function purchase(){
    var package_id = $('#package_id').val();
    var user_id = $('#user_id').val();
    var user_email = $('#user_email').val();
    var post_link = $('#post_link').val();
    var user_phone = $('#user_phone').val();
    if(post_link == ''){
      $('.link_error').css('display','block');
      return;
    }else{
      $('.link_error').css('display','none');
    }

    if(user_email == ''){
      $('.email_error').css('display','block');
      return;
    }else{
      $('.email_error').css('display','none');
    }
    if(user_phone == ''){
      $('.phone_error').css('display','block');
      return;
    }else{
      $('.phone_error').css('display','none');
    }

    $.ajax({
        type: "POST",
        data: {package_id: package_id,user_id:user_id,user_email:user_email,user_phone:user_phone,post_link:post_link},

        url: base_url+"pages/ajax_purchase_package.php",
        success: function(result) 
        {
           Swal.fire('Package Purchased Successfully. Admin will contact you soon', '', 'success');
             setTimeout(function(){
                  window.location.href="services.htm";
                   
              }, 2000);     

        }
    });
    // alert(user_id);
  }
   // Swal.fire('Changes are not saved', '', 'success');
  
</script>
</body>

</html>
<!-- // grids block 5 -->