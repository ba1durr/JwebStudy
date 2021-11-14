<?php

//connect to database
$conn = mysqli_connect('localhost', 'Luke', 'Lukito123.', 'ninja_pizza');

//check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
    //writing queries for all the pizzas
    $sql = 'SELECT title, ingredients, id
            FROM pizzas
            ORDER BY `created at`';

    //make query and get result
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //freeing from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    //explode(',' , $pizzas[0]['ingredients']);

?>

<!DOCTYPE html>
<html>
    
    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza): ?>

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                                <ul>
                                    <?php foreach(explode(',' , $pizza['ingredients'])as $ing): ?> 
                                        <li><?php echo htmlspecialchars($ing); ?></li>    
                                    <?php endforeach; ?>    
                                </ul>
                        </div>
                            <div class="card-action right-align">
                            <a class="brand-text" href="#">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if(count($pizzas)>=2): ?>
                <p>there are 2 or more pizzas</p>
            <?php else:?>
                <p>there are less than 2 pizzas</p>
            <?php endif; ?>

            
            <?php if(count($pizzas)>=2) { ?>
                <p>there are 2 or more pizzas</p>
            <?php } else {?>
                <p>there are less than 2 pizzas</p>
            <?php } ?>

            
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html> 