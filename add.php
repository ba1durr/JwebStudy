<?php    

include('includes/class-autoload.inc.php');
require_once('classes/contr.class.php');
require_once('classes/Attributes.class.php');
require_once('classes/DVD.class.php');
require_once('classes/Furniture.class.php');
require_once('classes/Book.class.php');

$valid = new productValidator($_POST);
$errors = $valid->validateForm();
$cont = new productsContr();

if ($errors){
   
    echo json_encode($errors);

}else if (empty($errors)) { 
   
        $cont->setProduct($_POST);
        //setAttr is executed in a different manner for each product type

        $prefix = 'attr_';
        $classInstance = $prefix . $_POST['Type'];
        $attr = new $classInstance($_POST);
        $attr->setAttr($_POST);
        // $attr = new attr_Book;
        // $attr->setAttr($_POST);

        $success = ["success" => "index.php"];
        echo json_encode($success);
    
}

//header('location: index.php');