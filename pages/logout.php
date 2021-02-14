<?php
unset($_SESSION['user_detail']);
session_destroy();
echo '<script>window.location.href="'.$base_url.'"</script>';
?>