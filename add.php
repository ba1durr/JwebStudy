<?php    

include('classes/dbh.class.php');
include('includes/class-autoload.inc.php');

$valid = new productValidator($_POST);
$errors = $valid->validateForm();
print_r(json_encode($errors));




