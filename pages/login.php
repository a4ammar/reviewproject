 <?php
include '../includes/header.php';
include '../includes/navbar.php';
// include 'includes/slider.php';
if(isset($_POST['submit'])){
  unset($_POST['submit']);

  $result = $code->login($_POST);
  if($result == 'Success'){

      echo '<script>window.location.href="'.$base_url.'"</script>';
    }

  // die();
}
?>
<style type="text/css">
  .h6{
    height: 23px;
    background: #ab1e32;
    border-radius: 10px;
    text-align: center;
    color: white;
  }
</style>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="<?php echo base_url; ?>">Home</a> &nbsp; / &nbsp; Login</p>
      <h3 class="my-3" style="color: white;">Sigin into the site for using our services. </h3>
      <p>Use your email and password.</p>
    </div>
  </div>
</section>
<div class="contact-form section-gap pt-5" id="contact">
     <div class="container py-lg-5 py-md-4">
         
         
         <div class="contacts12-main mb-5" style="margin-top: -69px;border: 1px solid red;">
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
                      Invalid Email of Password!. Please try again.
                  </div>';
            }
          }
          ?>

          <div class="main-input">
            <div class="row">
              <div class="col-md-6" style="margin: 83px;margin-left: 269px;">
                <br>
                <h6 class="h6">Please login here using your email and password</h6>
                <br>

             <form  method="post">

                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="" autocomplete="off">            
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required="" autocomplete="off">  
                <p style="color: #ab1e32;">Not a member ?Please <a href="<?=$base_url;?>register.htm"><b style="color: #ab1e32;">Register</b></a></p>
                <div class="text-right">
                     <button class="btn btn-secondary btn-theme2" type="submit" name="submit">Login</button>
                 </div>  
              </form>        
              </div>
            </div>
          </div>
        
            <br>
             <!-- <h6 style="color: green;"><span>Note:</span>If you want to register as a company please click here &nbsp;&nbsp;&nbsp;<a href="<?=$base_url;?>company_register.htm" class="btn btn-secondary ">Click Here</a></h6> -->
         </div>

     </div>
    
    </div>

<?php
include '../includes/footer.php';
?>