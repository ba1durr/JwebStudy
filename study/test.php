<?php

//file system - part 1
// $quotes = readfile('readme.txt');
// echo $quotes;


$file = 'quotes.txt';

//opening file
$handle = fopen($file, 'a+');

//reading file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

//reading single line
// echo fgets($handle);
// echo fgets($handle);

//read single chars
// echo fgetc($handle);
// echo fgetc($handle);

//writing to a file
//fwrite($handle, "\nEverything popular is wrong");

fclose($handle);

//file deletion

unlink($file);

// if(file_exists($file)){

    // //read the file
    // echo readfile($file) . '<br />';

    // //copy file
    // copy($file, 'quotes.txt');

    // //absolute path
    // echo realpath($file) . '<br />';

    // //file size
    // echo filesize($file) . '<br />';

    // //rename file
    // rename($file, 'test.txt');

// } else {

//     echo 'file does not exist';



// }


// //make directory
// mkdir('quotes');


?>
