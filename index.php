<?php 

require_once('classes/dbh.class.php');
require_once('classes/products.class.php');
require_once('classes/View.class.php');
require_once('classes/contr.class.php');
require_once('classes/Attributes.class.php');
require_once('classes/DVD.class.php');
require_once('classes/Furniture.class.php');
require_once('classes/Book.class.php');

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
   
    echo "this is attribute Index " . $attribute['Index'];
    echo "</br>";

    foreach ($prodd as &$product){

        if ($attribute['Index'] == $product ['Product_ID']){

            $product += [$attribute['Attribute']=> $attribute['Value']];
            
        }

        echo "this is Product ID " . $product['Product_ID'];
        echo "</br>";


    }

  
}

print_r($prodd);



?>