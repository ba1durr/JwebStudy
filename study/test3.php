<?php 

class User{
    public $username;
    private $email;

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }

    //getters
    public function getEmail(){
        return $this->email;
    }
    //setter
    public function setEmail($email){
        if(strpos($email,'@') > -1){
        $this->email = $email;
        } else {
            echo 'invalid email address!' . '<br />';
        }
    }


}

$userOne = new User('Mario','Mario@bandai.com');
$userTwo = new User('Freya','Freya@vanir.com');

$userOne->setEmail('Baldurodin.com');



echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP OOP PRACTICE</title>
</head>
<body>
 
</body>
</html>