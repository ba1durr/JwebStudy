<?php 

class User{
    public $username;
    protected $email;
    public $role = 'member';

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }

    public function message(){
        return "$this->email sent a new message";
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
            return 'invalid email address!';
        }
    }
}

class AdminUser extends User {

    public $level;
    public $role = 'admin';

    public function message(){
        return "$this->email, an admin, sent a new message";
    }

    public function __construct($username,$email,$level){
        $this->level = $level;
        parent::__construct($username,$email);
    }

}


$userOne = new User('Mario','Mario@bandai.com');
$userTwo = new User('Freya','Freya@vanir.com');
$userThree = new AdminUser('Yoshi', 'yoshi@odin.com', 5);

// echo $userThree->username . '<br />';
// echo $userThree->getEmail() . '<br />';
// echo $userThree->level . '<br />';

// $userOne->setEmail('Baldur@odin.com');


echo $userOne->role . '<br />';
echo $userThree->role . '<br />';
echo $userOne->message() . '<br />';
echo $userTwo->message() . '<br />';
echo $userThree->message() . '<br />';
// echo $userTwo->getEmail();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP OOP PRACTICE</title>
</head>
<body>
 
</body>
</html>