<?php 

class User{
    //properties and methods
    public $username = 'baldur';
    public $email = 'baldur@odin.com';

    public function addFriend(){
        return "$this->username added a new friend";
    }

}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . '<br />';
echo $userOne->email . '<br />';
echo $userOne->addFriend() . '<br />';

// print_r ( get_class_vars('User') );
// print_r ( get_class_methods('User') );

$userTwo->username = 'mimir';
$userTwo->email = 'mimir@odin.com';


echo $userTwo->username . '<br />';
echo $userTwo->email . '<br />';
echo $userTwo->addFriend() . '<br />';



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP OOP PRACTICE</title>
</head>
<body>
 
</body>
</html>