<?php
include '../code/adminFunctions.php';

$record_id = $_POST['record_id'];
$table = $_POST['table'];

$code->delete($record_id,$table);

?>