<?php 

//ternary operations
// $score = 20;

// if($score > 40){
//     echo 'high score';
// } else {
//     echo 'low score :(';
// }

//echo $score > 40 ? 'High Score!' : 'Low Score :(';
//<p><?php echo $score > 40 ? 'High Score!' : 'Low Score :('; 

//SUPER GLOBALS
// echo $_SERVER['SERVER_NAME'] . '<br />';
// echo $_SERVER['REQUEST_METHOD'] . '<br />';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
// echo $_SERVER['PHP_SELF'] . '<br />';


// sessions
// $_SESSION, $_COOKIE


if(isset($_POST['submit'])){

    //cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    //when the user hits the submit button, session starts
    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');

}



?>

<!DOCTYPE html>
<html>
<head>
<title>PHP TUTS</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="" name="name">
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>