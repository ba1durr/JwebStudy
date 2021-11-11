<?php

//$stringOne = 'My email is ';
//$stringTwo = 'Mario123@gmail.com';

//1 using . for concatenation
//echo $stringOne . $stringTwo;

//$name = 'Mario';

//2 concatenate and call variable
//echo 'Hey My name is ' . $name;

//3 calling variables in string without concatenation in double quoted strings
//echo "Hey my name is $name";

//4 using double quotes as text for quoting
//echo "The ninja screamed \"whaaa\"";
//echo 'The ninja screamed "whaa" '

//5სტრინგის მასივები
//echo $name[0]

//6functions
//string length
//strlen($stringOne)

//7functions
// echo strtoupper($name);
// echo strtolower($name);

 //echo str_replace('M', 'w', $name);


// $radius = 25;
// $pi = 3.14;

// basic - *, /, +, -, **(ხარისხი)

//echo $pi * $radius**2;

// increment & decrement

//  echo $radius++;

// შემოკლებები

// += -= *= 

//number functions

//echo ceil ($pi);
//echo floor ($pi);

//echo pi();


//INDEXED ARRAYS

//$people1 = ['Shaun', 'Crystal', 'Maggie'];

//$people2 = array('ken', 'chun-li');

//$numbas = [10,30,50,70,90];

//print_r($numbas);

//$numbas[1]=25;
//print_r($numbas);

//$numbas[] = 60;
//print_r($numbas);

//array_push($numbas,117);
//print_r($numbas);

//echo count($numbas);

//array_pop($numbas);
////print_r($numbas);

//$peopleThree = array_merge($people1,$people2);
//print_r($peopleThree);

//echo $people1[2];


// ASSOCIATIVE ARRAYS (key and value)

//$ninjasOne = ['shaun' => 'black' , 'mario' => 'red', 'luigi' => 'green'];

//echo $ninjasOne['mario'];
//print_r($ninjasOne);

//$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
//print_r($ninjasTwo);

//$ninjasTwo['peach'] = 'pink';

//echo count($ninjasTwo);

//$ninjasThree = array_merge($ninjasOne,$ninjasTwo);

//print_r ($ninjasThree);


//8 multidimensional array

//$blogs = [
   // ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
   // ['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
   // ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
//];

//print_r($blogs);
//print_r($blogs[2]);
//echo $blogs[1]['title'];
//echo count($blogs);

//$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];
//print_r($blogs);

//$popped = array_pop($blogs);
//print_r($popped);



//9 LOOPS

//$ninjas = ['shaun', 'ryu', 'yoshi'];

//for ($i=0; $i < count($ninjas); $i++ ){
//echo $ninjas[$i] . '<br />';
//}

//foreach($ninjas as $ninja){
//echo $ninja . '<br />';
//}

// $products = [
//     ['name' => 'shiny star', 'price' => 20],
//     ['name' => 'green shell', 'price' => 10],
//     ['name' => 'red shell', 'price' => 15],
//     ['name' => 'gold coin', 'price' => 5],
//     ['name' => 'lightning bolt', 'price' => 40],
//     ['name' => 'banana skin', 'price' => 2]
// ]
// ;

// $i=0;

// while($i < count($products)){
// echo $products[$i]['name'];
// echo '<br />';
// $i++;

// };

// foreach ($products as $product){
//     echo $product['name'] . ' - ' . $product['price'] . '<br />';
// }


//10 Booleans and Comparisons

// echo true;


//comparisons of numbers (LOOSE COMPARISON)

//echo 5 < 10;
//echo 5 > 10;
//echo 5 == 10;
//echo 5 != 10;

//comparisons of strings

//echo 'shaun' < 'yoshi'
//echo 'shaun' > 'Shaun'
//echo 'mario' == 'mario;
//echo 'mario' != 'Mario';


//Strict Comparison

// echo 5 == '5';   // ans is  '1'
// echo 5 === '5';  //ans is false
// echo 5 === 5;    // ans is 1

// echo true == "1"; //ans is 1
// echo "hey";
// echo false == "";

// $price = 20;

// if ($price < 10) {
// echo 'the condition has been met';
// }   elseif($price < 30) {
//     echo 'elseif condition met';
// } else { 
//     echo 'the condition has not been met';
// }
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

 

    // if ($product['price'] < 15 && $product['price'] >2){
    //         echo $product['name'] . "<br />";
    // }

    // if ($product['price'] >20 || $product['price'] < 10){
    //     echo $product['name'] . "<br />";
    //}



?> 

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>first PHP file</title>
</head>
<body>

    <h1>Products</h1>
<ul>

<--?php foreach($products as $product){ ?>

<h3> <--?php echo $product['name'];  ?> </h3>
<p>$ <--?php echo $product['price']; ?> </p>

<--?php } ?>

</ul>
</body>
</html> -->


