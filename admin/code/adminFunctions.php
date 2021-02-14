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
	public function add_package($array){
		$title = $array['title'];
		$price = $array['price'];
		$description = $array['editor1'];
		$isdel = '0';
		$created_at = date('yy-m-d h:i:s');
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
				//echo $file_tmp,"admin/assets/images/package_images/".$file_name;
				move_uploaded_file($file_tmp,"assets/images/package_images/".$file_name);
			
			}else{
				print_r($errors);
			}
		$profile_image = $file_name;

		}else{
		$profile_image = "";

		}

		$query = "INSERT INTO `packages` SET 
		title = '".$title."',
		price = '".$price."',
		description = '".$description."',
		image = '".$profile_image."',
		created_at = '".date('Y-m-d h:i a')."',
		isdel = '0'";
	
		$query = mysqli_query($this->conn,$query);
		if($query){
			return 'Success';
		}else{
			
			return 'Something Went Wrong!';
		}
		// return $query;

	}
	public function get_packages(){
			
		$query = "SELECT * FROM `packages` WHERE isdel = '0'";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}	
	public function get_slider_images(){
			
		$query = "SELECT * FROM `slider_images` WHERE isdel = '0'";	
		$query = mysqli_query($this->conn,$query);
		return $query;
	}

	public function save_slider_image($image = "",$title = ""){
			
		$query = "INSERT INTO `slider_images` SET 
		title = '".$title."',
		image = '".$image."',
		added_on = '".date('Y-m-d h:i a')."',
		isdel = '0'";
	
		$query = mysqli_query($this->conn,$query);
		if($query){
			return 'Success';
		}else{
			
			return 'Something Went Wrong!';
		}
		// return $query;

	}
	public function upload_image($name = ""){

		   if (isset($_FILES['image']) && $_FILES['image']['tmp_name']!='') {
                $uploaddir = './assets/images/site_images/';
                $path = $_FILES['image']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $user_img = time() . rand() . '.' . $ext;
                $uploadfile = $uploaddir . $user_img;
                if ($_FILES["image"]["name"]) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"],$uploadfile)) {
                   
                        $image_name = $user_img;
                    }
                }
                return $image_name;
                // die();
            }
	}
	public function get_preferences($name = ""){

			$query = "SELECT * FROM `preferences` WHERE name = '".$name."'";
			$query = mysqli_query($this->conn,$query);
			$res = mysqli_fetch_assoc($query);
			return $res['value'];
		    
	}
	public function save_preferences($array = ""){

		foreach ($array as $key => $value) {

			$query = "SELECT * FROM `preferences` WHERE name = '".$key."'";
			$query = mysqli_query($this->conn,$query);
			$row_count = mysqli_num_rows($query);
			if($row_count > 0){
				$query = "UPDATE `preferences` SET value = '".$value."' WHERE name = '".$key."'";
			}else{
				$query = "INSERT INTO `preferences` SET value = '".$value."',name = '".$key."'";
			}
			$query = mysqli_query($this->conn,$query);
		}


	}
	public function delete($record_id,$table){

		$query = "UPDATE $table SET `isdel` = '1' WHERE `id` = '".$record_id."'";
		$query = mysqli_query($this->conn,$query);	
		return $result;	
	}
	public function getUsers(){

		$query = "SELECT * FROM `users` WHERE isdel = 0";
		$query = mysqli_query($this->conn,$query);
		// $result = mysqli_fetch_array($query);	
		return $query;	

	}
	public function login($username,$password){

		$username = mysqli_real_escape_string($this->conn,$username);
		$password = mysqli_real_escape_string($this->conn,$password);

		$query = "SELECT * FROM admin WHERE username = '".$username."' and password = '".md5($password)."'";	
		$result = $this->query($query);

		if($result != ""){
			$_SESSION['user_info'] = $result;
		
			return true;
		}else{
		
			return false;
		}
		// return $this->conn;
	}
	public function query($query){

		$query = mysqli_query($this->conn,$query);
		$result = mysqli_fetch_assoc($query);	
	
		return $result;
	}
}
$code = new code();
// $db = $code->login();

?>