<?php
include '../includes/header.php';
include '../includes/navbar.php';
// include 'includes/slider.php';
if(isset($_POST['submit'])){
  unset($_POST['submit']);
  $result = $code->update_profile($_POST,$user_id);
  // die();
}
if(isset($user_id) && $user_id != ""){
  $userdetail = $code->get_userdetail($user_id);

  if($userdetail['profile_image'] != ""){
    $image_src = $base_url.'admin/assets/images/profile_images/'.$userdetail['profile_image'];
  }else{
    $image_src = $base_url.'admin/assets/images/site_images/no_profile.jpg';

  }
}

?>
<?php
include './includes/seller_dashboard_navbar.php';
?>

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
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Your Name" class="contact-input" required="" value="<?=$userdetail['name']?>">
                        <input type="text" name="phone" id="phone" placeholder="Phone Number" class="contact-input" required="" value="<?=$userdetail['phone']?>">
                        <input type="email" name="email" id="w3lSender" placeholder="Your Email id" class="contact-input" required="" value="<?=$userdetail['email']?>" readonly="">
                        <input type="text" name="address" id="address" placeholder="Enter Your address" class="contact-input" required="" value="<?=$userdetail['address']?>">
                         <select class="form-control select" name="user_type" required>
                           <option value="">Choose Your Type</option>
                           <option value="0" <?php if($userdetail['user_type'] == '0'){ echo 'selected'; }?>>Seller</option>
                           <option value="1" <?php if($userdetail['user_type'] == '1'){ echo 'selected'; }?>>Buyer</option>
                         </select>
                      </div>
                      <div class="col-md-6">
                        <input type="file" name="image" id="image"  class="contact-input" >
                        <?php if($userdetail['profile_image'] != ""){ ?>
                          <input type="hidden" name="image" value="<?=$userdetail['profile_image'];?>">
                        <?php }?>
                        
                         <img src="<?=$image_src;?>" style="height: 150px;width: 150px;">
                         <br>
                         <br>
                         <input type="text" name="country" id="country" placeholder="Country" class="contact-input" required="" value="<?=$userdetail['country']?>">
                         <input type="password" name="password" id="w3lSender" placeholder="Enter new password" class="contact-input" >
                         <?php if($userdetail['services'] != ""){ ?>
                         <input type="text" name="services" id="services" placeholder="Services you can provide e.g reviews,likes,comments etc" class="contact-input" value="<?=$userdetail['services']?>" >
                          <?php } ?>
                          <div class="text-right">
                             <button class="btn btn-secondary btn-theme2" type="submit" name="submit">Register</button>
                         </div>
                      </div>

                    </div>

                 </div>
            
                
                 
             </form>
           
         </div>

     </div>
    
    </div>

<?php
include '../includes/footer.php';
?>