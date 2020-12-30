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

		$query = "UPDATE $table SET `status` = '0' WHERE `users`.`id` = '".$record_id."'";
		$query = mysqli_query($this->conn,$query);	
		return $result;	
	}
	public function getUsers(){

		$query = "SELECT * FROM `users` WHERE status = 1";
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