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
	public function register($array){
		
		$name = $array['name'];
		$phone = $array['phone'];
		$email = $array['email'];
		$address = $array['address'];
		$user_type = $array['user_type'];
		$password = $array['password'];
		$password = md5($password);
		$status = '1';
		$created_at = date('yy-m-d h:i:s');

		//check email already exist
		$query = "SELECT * FROM `users` WHERE email = '".$email."'";
		$query = mysqli_query($this->conn,$query);
		$result = mysqli_fetch_assoc($query);	
		if(count($result) > 0){
			$msg = 'Sorry. Email already exist!';
			return $msg;
		}
		$query = "INSERT INTO `users` (`name`, `phone`, `email`, `password`, `address`, `user_type`, `status`, `created_at`) VALUES ('".$name."', '".$phone."', '".$email."', '".$password."', '".$address."', '".$user_type."', '".$status."','".$created_at."')";
		$query = mysqli_query($this->conn,$query);
		if($query){
			$msg = 'Success';

		}else{
			$msg = 'Something Went Wrong!';
		}
		return $msg;

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