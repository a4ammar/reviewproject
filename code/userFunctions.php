<?php
class code
{
	
	function __construct()
	{
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$db = 'review';
        $this->conn = mysqli_connect($server,$username,$password,$db);
  
	}
	public function get_packagedetail($id=""){

		$query = "SELECT * FROM `packages` WHERE id = ".$id." and isdel = '0'";	
		$query = mysqli_query($this->conn,$query);
		$query = mysqli_fetch_assoc($query);
		return $query;
	}	
	public function get_task_detail($id=""){

		$query = "SELECT * FROM `tasks` WHERE id = ".$id." and isdel = '0'";	
		$query = mysqli_query($this->conn,$query);
		$query = mysqli_fetch_assoc($query);
		return $query;
	}
	public function get_total_earning_by_user_id($user_id=""){

		$query = "SELECT * FROM `earning_details` WHERE user_id = ".$user_id." and isdel = '0' order by id desc";	
		$query = mysqli_query($this->conn,$query);
		while ($data = mysqli_fetch_assoc($query)) {
		    $amount += $total + $data['amount'];
		}
		return $amount;
	}
	public function earning_details($user_id=""){

		$query = "SELECT * FROM `earning_details` WHERE user_id = ".$user_id." and isdel = '0' order by id desc";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}	
	public function get_usertasks($user_id=""){

		$query = "SELECT * FROM `tasks` WHERE user_id = ".$user_id." and isdel = '0' order by id desc";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}
	public function update_profile($array,$user_id){

		$name = $array['name'];
		$phone = $array['phone'];
		$email = $array['email'];
		$address = $array['address'];
		$user_type = $array['user_type'];
		$password = $array['password'];
		$country = $array['country'];
		$services = $array['services'];
		$old_image = $array['image'];

		if($password != ""){
		$password = md5($password);
		}
		//check email already exist
		// $query = "SELECT * FROM `users` WHERE email = '".$email."'";
		// $query = mysqli_query($this->conn,$query);
		// $result = mysqli_fetch_assoc($query);	
		// if(count($result) > 0){
		// 	$msg = 'Sorry. Email already exist!';
		// 	return $msg;
		// }
		if(isset($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if($file_size > 2097152){
				$errors[]='File size must be excately 2 MB';
			}

			if(empty($errors)==true){
				$file_name = time().'_'.$file_name;
				move_uploaded_file($file_tmp,"admin/assets/images/profile_images/".$file_name);
			
			}else{
				// print_r($errors);
			}
		$profile_image = $file_name;

		}else{
		$profile_image = $old_image;

		}
		if($profile_image == "")
		{
			$profile_image = $old_image;
		}		

		$query = "UPDATE `users` SET
		`name` = '".$name."',
		`phone` = '".$phone."',
		`email` = '".$email."',
		`password` = '".$password."',
		`address` = '".$address."',
		`user_type` = '".$user_type."',
		`profile_image` = '".$profile_image."',
		`country` = '".$country."',
		`services` = '".$services."'
		 WHERE id = '".$user_id."'";
		

		$query = mysqli_query($this->conn,$query);
		if($query){
			$msg = 'Success';

		}else{
			$msg = 'Something Went Wrong!';
		}
		return $msg;

	}
	public function get_userdetail($id=""){

		$query = "SELECT * FROM `users` WHERE id = ".$id." and isdel = '0'";	
		$query = mysqli_query($this->conn,$query);
		$query = mysqli_fetch_assoc($query);
		return $query;
	}
	public function register_company($array){
		
		$name = $array['name'];
		$phone = $array['phone'];
		$email = $array['email'];
		$address = $array['address'];
		$user_type = '2';
		$password = $array['password'];
		$password = md5($password);
		$isdel = '0';
		$created_at = date('yy-m-d h:i:s');

		//check email already exist
		$query = "SELECT * FROM `users` WHERE email = '".$email."'";
		$query = mysqli_query($this->conn,$query);
		$result = mysqli_fetch_assoc($query);	
		if(count($result) > 0){
			$msg = 'Sorry. Email already exist!';
			return $msg;
		}
		if(isset($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if($file_size > 2097152){
				$errors[]='File size must be excately 2 MB';
			}

			if(empty($errors)==true){
				$file_name = time().'_'.$file_name;
				move_uploaded_file($file_tmp,"assets/profile_images/".$file_name);
			
			}else{
				print_r($errors);
			}
		$profile_image = $file_name;

		}else{
		$profile_image = "";

		}
		$query = "INSERT INTO `users` (`name`, `phone`, `email`, `password`, `address`, `user_type`, `isdel`, `created_at`, `profile_image`) VALUES ('".$name."', '".$phone."', '".$email."', '".$password."', '".$address."', '".$user_type."', '".$isdel."','".$created_at."','".$profile_image."')";

		$query = mysqli_query($this->conn,$query);
		$last_id = $this->conn->insert_id;

		$query = "INSERT INTO `companies` (`user_id`, `company_name`,`isdel`, `created_at`) VALUES ('".$last_id."', '".$name."', '".$isdel."','".$created_at."')";
		$query = mysqli_query($this->conn,$query);

		if($query){
			$msg = 'Success';

		}else{
			echo 
			$msg = 'Something Went Wrong!';
		}
		return $msg;

	}
	public function register($array){

		$name = $array['name'];
		$phone = $array['phone'];
		$email = $array['email'];
		$address = $array['address'];
		$user_type = $array['user_type'];
		$password = $array['password'];
		$country = $array['country'];
		$services = $array['services'];
		$password = md5($password);
		$isdel = '0';
		$created_at = date('yy-m-d h:i:s');

		//check email already exist
		$query = "SELECT * FROM `users` WHERE email = '".$email."'";
		$query = mysqli_query($this->conn,$query);
		$result = mysqli_fetch_assoc($query);	
		if(count($result) > 0){
			$msg = 'Sorry. Email already exist!';
			return $msg;
		}
		if(isset($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if($file_size > 2097152){
				$errors[]='File size must be excately 2 MB';
			}

			if(empty($errors)==true){
				$file_name = time().'_'.$file_name;
				move_uploaded_file($file_tmp,"admin/assets/images/profile_images/".$file_name);
			
			}else{
				print_r($errors);
			}
		$profile_image = $file_name;

		}else{
		$profile_image = "";

		}

		$query = "INSERT INTO `users` (`name`, `phone`, `email`, `password`, `address`, `user_type`, `isdel`, `created_at`, `profile_image`, `country`, `services`) VALUES ('".$name."', '".$phone."', '".$email."', '".$password."', '".$address."', '".$user_type."', '".$isdel."','".$created_at."','".$profile_image."','".$country."','".$services."')";

		$query = mysqli_query($this->conn,$query);
		if($query){
			$msg = 'Success';

		}else{
			$msg = 'Something Went Wrong!';
		}
		return $msg;

	}
	public function login($array){

		$email = mysqli_real_escape_string($this->conn,$array['email']);
		$password = mysqli_real_escape_string($this->conn,$array['password']);

		$query = "SELECT * FROM users WHERE email = '".$email."' and password = '".md5($password)."' and isdel = 0";	

		$result = mysqli_query($this->conn,$query);
		$result_count = mysqli_num_rows($result);
		$result = mysqli_fetch_assoc($result);	

		if($result_count > 0){

			$_SESSION['user_detail'] = $result;
			$msg = 'Success';
			
		}else{
			$msg = 'Something Went Wrong!';
		}
		return $msg;

	}
	public function query($query){

		$query = mysqli_query($this->conn,$query);
		$result = mysqli_fetch_assoc($query);	
	
		return $result;
	}
	public function get_slider_images(){
			
		$query = "SELECT * FROM `slider_images` WHERE isdel = '0'";	
		$query = mysqli_query($this->conn,$query);

		return $query;
	}
	public function get_users(){
			
		$query = "SELECT * FROM `users` WHERE isdel = '0' and user_type = '0'";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}
	public function get_packages(){
			
		$query = "SELECT * FROM `packages` WHERE isdel = '0'";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}
	public function get_package_by_id($package_id = ""){
			
		$query = "SELECT * FROM `packages` WHERE isdel = '0' and id = $package_id";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}
	public function purchase_package($array = ""){

		$package_id = $array['package_id'];

		$package_detail = $this->get_package_by_id($package_id);
		$package_detail = mysqli_fetch_assoc($package_detail);

		$price = $package_detail['price'];
		$price = $price/100 * 10;
		$order_price = $package_detail['price'] + $price;

		$user_id = $array['user_id'];
		$user_email = $array['user_email'];
		$user_phone = $array['user_phone'];
		$post_link = $array['post_link'];

		$query = "INSERT INTO `orders` SET 
		package_id = '".$package_id."',
		order_price = '".$order_price."',
		user_id = '".$user_id."',
		user_email = '".$user_email."',
		user_phone = '".$user_phone."',
		post_link = '".$post_link."',
		added_on = '".date('Y-m-d h:i a')."',
		status = '0',
		isdel = '0'";
	
		$query = mysqli_query($this->conn,$query);
		if($query){
			return 'Success';
		}else{
			
			return 'Something Went Wrong!';
		}
	}
}
$code = new code();
// $db = $code->login();

?>