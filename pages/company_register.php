<?php
include '../includes/header.php';
include '../includes/navbar.php';
// include 'includes/slider.php';
if(isset($_POST['submit'])){
  unset($_POST['submit']);

  $result = $code->register_company($_POST);
  // die();
}
?>

<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="<?php echo base_url; ?>">Home</a> &nbsp; / &nbsp; Company Registeraton</p>
      <h3 class="my-3" style="color: white;">Register yourself as a company and add as much as employes under your company. </h3>
    
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
   
                 <div class="main-input">
                     <div class="d-grid">
                         <input type="text" name="name" id="name" placeholder="Name" class="contact-input" required="">
                         <input type="file" name="image" id="image"  class="contact-input" required="">
                         <input type="text" name="decsription" id="decsription" placeholder="Short Decsription" class="contact-input" required="">
                         <input type="text" name="phone" id="phone" placeholder="Phone Number" class="contact-input" required="">
                     </div>
                     <div class="d-grid">
                         <input type="email" name="email" id="w3lSender" placeholder="Your Email id" class="contact-input" required="">
                         <input type="password" name="password" id="w3lSender" placeholder="****" class="contact-input" required="">
                         <input type="text" name="address" id="address" placeholder="Enter Your address" class="contact-input" required="">
                     </div>
                 </div>
            
                
                 <div class="text-right">
                     <button class="btn btn-secondary btn-theme2" type="submit" name="submit">Register</button>
                 </div>
             </form>
            <br>
             <h6 style="color: green;"><span>Note:</span>If you want to register as individual please click here &nbsp;&nbsp;&nbsp;<a href="<?=$base_url;?>register.htm" class="btn btn-secondary ">Click Here</a></h6>
         </div>

     </div>
    
    </div>

<?php
include '../includes/footer.php';
?>