<?php
include 'includes/config.php';
unset($_SESSION['user_info']);
session_destroy();
echo '<script>window.location.href="'.$GLOBALS['base_url'].'login.php"</script>';

?>