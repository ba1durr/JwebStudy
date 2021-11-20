<?php 

class User{
    public $username = 'baldur';
    private $email = 'baldur@odin.com';

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }

}

$userOne = new User('Mario','Mario@bandai.com');
$userTwo = new User('Freya','Freya@vanir.com');

// echo $userOne->email . '<br />';
// echo $userTwo->email . '<br />';

echo $userOne->addFriend();

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