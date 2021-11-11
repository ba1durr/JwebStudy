<?php


$errors = ['email' => '', 'title' => '', 'ingredients' => ''];
    // if(isset($_GET['submit'])){
    //     echo $_GET['Email'];        
    //     echo $_GET['Title'];
    //     echo $_GET['Ingredients'];
    // }

    if(isset($_POST['submit'])){

        //check email
        if (empty($_POST['email'])){
            $errors['email'] = 'An E-mail is required <br />';
        }else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $errors['email'] = 'Email must be a valid Email Address';
            }
            // echo htmlspecialchars($_POST['Email']);             
        }

        //check title
        if (empty($_POST['title'])){
            $errors['title'] = 'A Title is required <br />';
        }else {            
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letters and spaces only';
             // echo htmlspecialchars($_POST['title']); 
            }
            
        }

        //check ingredients
        if (empty($_POST['Ingredients'])){
            $errors['ingredients'] = 'At least one ingredient is required <br />';
        }else {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] =  'ingredients must be a comma separated list';
            }
            // echo htmlspecialchars($_POST['Ingredients']);             
        }
        
    }  //end of POST CHECK

?>

<!DOCTYPE html>
<html>
    
    <?php include('templates/header.php'); ?>

    <section class="container gray-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" class="white" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email" value = "<?php echo $email; ?>">
                <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Pizza Title:</label>
            <input type="text" name="title" value = "<?php echo $title; ?>">
                <div class="red-text"><?php echo $errors['title']; ?>
            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value = "<?php echo $ingredients; ?>">
                <div class="red-text"><?php echo $errors['ingredients']; ?>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html> 


