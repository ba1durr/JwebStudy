<?php    

include('classes/dbh.class.php');
include('includes/class-autoload.inc.php');

    if(isset($_POST['submit'])){
        print_r($_POST);
        //Entry Validation
        
        $valid = new productValidator($_POST);
        $errors = $valid->validateForm();

        
    }


?>


