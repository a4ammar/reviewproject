<?php
$GLOBALS['base_url'] = 'http://localhost/projects/review/admin/';
$base_url = $GLOBALS['base_url'];
session_start();
function redirect($link){

	echo '<script>window.location.href="'.$GLOBALS['base_url'].''.$link.'.php"</script>';
}

?>