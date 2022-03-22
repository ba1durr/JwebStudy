<?php 

require_once('classes/dbh.class.php');
require_once('classes/products.class.php');
require_once('classes/View.class.php');
require_once('classes/contr.class.php');
require_once('classes/Attributes.class.php');
require_once('classes/DVD.class.php');
require_once('classes/Furniture.class.php');
require_once('classes/Book.class.php');

// $data = $_POST['products'];


$prod = new productsView();
$prodd = $prod->showProduct();

$book = new Book;
$bookarr = $book->getAttr();

$DVD = new DVD;
$DVDarr = $DVD->getAttr();

$Furniture = new Furniture;
$FurnitureArr = $Furniture->getAttr();

$merge1 = array_merge($bookarr, $DVDarr);
$merge2 = array_merge($merge1, $FurnitureArr);

foreach ($merge2 as $attribute){
   
    foreach ($prodd as &$product){

        if ($attribute['Index'] == $product ['Product_ID']){

            $product += [$attribute['Attribute']=> $attribute['Value']];
            
        }

    }

  
}

print_r(json_encode($prodd));


// echo '</br>';
// echo '</br>';
// echo '</br>';
// foreach($_POST as $key=>$value)
// {
//   echo "$key=$value";
// }



?>