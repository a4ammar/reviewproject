<?php
$GLOBALS['base_url'] = 'http://localhost:8080/project/';
$base_url = $GLOBALS['base_url'];
// define("base_url", "http://localhost/projects/review/");

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
if ($_REQUEST["page"] == 'index.htm' || !isset($_REQUEST["page"])) {
    $includefile = "pages/home.php";
}
session_start();
function redirect($link){

	echo '<script>window.location.href="'.$GLOBALS['base_url'].''.$link.'.htm"</script>';
}

?>
