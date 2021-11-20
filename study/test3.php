<?php 

class User{
    public $username = 'baldur';
    public $email = 'baldur@odin.com';

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->username added a new friend";
    }

}

$userOne = new User('Mario','Mario@odin.com');
$userTwo = new User('Freya','Freya@vanir.com');

echo $userOne->username . '<br />';
echo $userOne->email . '<br />';
echo $userOne->addFriend() . '<br />';

echo $userTwo->username . '<br />';
echo $userTwo->email . '<br />';
echo $userTwo->addFriend() . '<br />';

// print_r ( get_class_vars('User') );
// print_r ( get_class_methods('User') );

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP OOP PRACTICE</title>
</head>
<body>
 
</body>
</html>