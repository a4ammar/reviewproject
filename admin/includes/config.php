<?php

$phpfile 	 = explode(".",$_REQUEST["page"]);
$phpfilename = $phpfile[0].".inc.php";
$phpcodefile = $phpfile[0].".php";

if(file_exists("codes/".$phpcodefile)) {

	include_once("codes/".$phpcodefile);
}

if(file_exists("pages/".$phpcodefile)) {
	$includefile = "pages/".$phpcodefile;
}else{
	
	$includefile = "pages/home.php";
}


$GLOBALS['base_url'] = 'http://localhost:8080/project/admin/';
$base_url = $GLOBALS['base_url'];
session_start();
function redirect($link){

	echo '<script>window.location.href="'.$GLOBALS['base_url'].''.$link.'.htm"</script>';
}

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    $address_url = $url;
  
$address_url =  $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

if($address_url == 'localhost/projects/review/admin'){
	
if(!isset($_SESSION['user_info'])){

	echo '<script>window.location.href="'.$GLOBALS['base_url'].'login.php"</script>';
	
}
}
?>