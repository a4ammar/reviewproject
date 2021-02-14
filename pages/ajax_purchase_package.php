<?php
include '../code/userFunctions.php';
$purchase_package = $code->purchase_package($_POST);
echo $purchase_package;
?>


