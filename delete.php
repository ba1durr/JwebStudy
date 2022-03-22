<?php 
include('classes/productDelete.class.php');

if (isset($_POST['del'])) {
 $deleteObj = new productDelete($_POST['del']);
 $deleteObj->deleteProducts();
}
?>