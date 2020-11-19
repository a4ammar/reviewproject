<?php
include 'includes/config.php';
unset($_SESSION['user_info']);
session_destroy();
redirect('login');
?>