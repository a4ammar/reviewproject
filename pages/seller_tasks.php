<?php
include '../includes/header.php';
include '../includes/navbar.php';
// include 'includes/slider.php';

if((isset($user_id) && $user_id != "") && (isset($user_type) && $user_type === '0')){
  $tasks = $code->get_usertasks($user_id);
}else{
  echo '<script>window.location.href="'.$base_url.'";</script>';
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
          <table id="example" class="display dataTable" style="width: 100%;" >
            <thead>
              <tr>
                <th class="action-buttons">#</th>
                <th class="action-buttons">Package_name</th>
                <th class="action-buttons">Task Link</th>
                <th class="action-buttons">Task Description</th>
                <th class="action-buttons">Status</th>
                <th class="action-buttons">Added on</th>
                <th class="action-buttons">Action</th>
              </tr>
            </thead>
            <tbody id="result">
<?php
$count = 1;
while ($data = mysqli_fetch_assoc($tasks)) {

?>
                <tr>
                <td><?=$count;?></td>
                <td><?=$code->get_packagedetail($data['package_id'])['title'];?></td>
                <td><a href="<?=$data['task_link'];?>" target="_blank"><button class="btn btn-info">Go To Link</button></a></td>
                <td><?=$data['task description'];?></td>
                <td>
                  <?php 
                  if($data['status'] == '0'){
                    echo '<button class="btn btn-danger">Pending</button>';
                  }else{
                    echo '<button class="btn btn-success">Task completed</button>';
                  }
                  ?>
                 </td>
                <td><?=$data['added_on'];?></td>
                <td>
                  <?php 
                  if($data['status'] == '0'){
                    echo '<button class="btn btn-primary">Complete</button>';
                  }else{
                    echo '<button class="btn btn-success">Done</button>';
                  }
                  ?>
                            
                </td>
              </tr>
<?php
$count ++;
}
?>
            </tbody>
          </table>

           
         </div>

     </div>
    
    </div>

<?php
include '../includes/footer.php';
?>