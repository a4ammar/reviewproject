 <?php
include '../includes/header.php';
include '../includes/navbar.php';
// include 'includes/slider.php';
if(isset($_POST['submit'])){
  unset($_POST['submit']);

  $result = $code->register($_POST);
  // die();
}
?>

<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="<?php echo base_url; ?>">Home</a> &nbsp; / &nbsp; Register</p>
      <h2 class="my-3">Register Yourself and become a member of this amazing community. </h2>
    
      <p>Please fillout the form carefully.</p>
    </div>
  </div>
</section>
<div class="contact-form section-gap pt-5" id="contact">
     <div class="container py-lg-5 py-md-4">
         
         
         <div class="contacts12-main mb-5">
          <?php
          if(isset($result)){
            if($result == 'Success'){
              echo '<div class="alert alert-info" role="alert">
                      You have successfully registered your account please login by using your email and password!
                  </div>';
            }else if($result == 'Sorry. Email already exist!'){
              echo '<div class="alert alert-danger" role="alert">
                      Sorry. Email already exist!
                  </div>';
            }else{
              echo '<div class="alert alert-danger" role="alert">
                      Something Went Wrong!. Please try again.
                  </div>';
            }
          }
          ?>
           
             <form  method="post" enctype="multipart/form-data">
                <br>
              

                <ul>
                  <li style="color: red;">Please don't fill services if you are sigin as a buyer</li>
                </ul>
                <br>
                <br>
           
                 <div class="main-input">
                     <div class="d-grid">
                         <input type="text" name="name" id="name" placeholder="Your Name" class="contact-input" required="">
                         <input type="file" name="image" id="image"  class="contact-input" required="">
                         
                         <input type="text" name="phone" id="phone" placeholder="Phone Number" class="contact-input" required="">
                         <input type="text" name="country" id="country" placeholder="Country" class="contact-input" required="">
                     </div>
                     <div class="d-grid">
                         <input type="email" name="email" id="w3lSender" placeholder="Your Email id" class="contact-input" required="" >
                         <input type="password" name="password" id="w3lSender" placeholder="****" class="contact-input" required="">
                         <input type="text" name="address" id="address" placeholder="Enter Your address" class="contact-input" required="">
                         <input type="text" name="services" id="services" placeholder="Services you can provide e.g reviews,likes,comments etc" class="contact-input" >
                         <select class="form-control select" name="user_type" required>
                           <option value="">Choose Your Type</option>
                           <option value="0">Seller</option>
                           <option value="1">Buyer</option>
                         </select>
                     </div>
                 </div>
            
                
                 <div class="text-right">
                     <button class="btn btn-secondary btn-theme2" type="submit" name="submit">Register</button>
                 </div>
             </form>
            <br>
             <!-- <h6 style="color: green;"><span>Note:</span>If you want to register as a company please click here &nbsp;&nbsp;&nbsp;<a href="<?=$base_url;?>company_register.htm" class="btn btn-secondary ">Click Here</a></h6> -->
         </div>

     </div>
    
    </div>

<?php
include '../includes/footer.php';
?>