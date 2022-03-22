<?php    

include('includes/class-autoload.inc.php');
require_once('classes/contr.class.php');
require_once('classes/Attributes.class.php');
require_once('classes/DVD.class.php');
require_once('classes/Furniture.class.php');
require_once('classes/Book.class.php');

$cont = new productsContr();
$Sku = $cont->showSKU();
$valid = new productValidator($_POST,$Sku);
$errors = $valid->validateForm();



if ($errors){
   
    echo json_encode($errors);

}else if (empty($errors)) { 
   
        $cont->setProduct($_POST);
        //setAttr is executed in a different manner for each product type

        $prefix = '';
        $classInstance = $prefix . $_POST['Type'];
        $attr = new $classInstance($_POST);
        $attr->setAttr($_POST);

        $success = ["success" => "index.php"];
        echo json_encode($success);
    
}

//header('location: index.php');