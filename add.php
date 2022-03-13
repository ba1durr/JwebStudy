<?php    

include('includes/class-autoload.inc.php');
require_once('classes/contr.class.php');

$valid = new productValidator($_POST);
$errors = $valid->validateForm();
$cont = new productsContr();

if ($errors){
    echo json_encode($errors);
} else if (empty($errors)) { 
   
    echo "ASS";
    $cont->setProduct($_POST);

}


//header('location: index.php');




