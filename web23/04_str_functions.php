<?php

// echo 'a', 'b';

// INVALID 
// print 'a', 'b';

// $strVar  = 'hello php-php';
$strVar  = 'hello php';

// echo strrev($strVar);
// echo str_word_count($strVar);
// echo strpos($strVar, 'c');
// echo ucfirst($strVar);
// echo strtoupper($strVar);
// $search = str_replace('hp', 'LENOVO', $strVar);
// var_dump($search);
// echo str_shuffle($strVar);
$a = 123;
$a = 'ABC';
// echo $a;

//CONSTANT
define('WIDTH', 15);
define('LENGTH', 20);


// echo 'area is: ' . LENGTH * WIDTH * 2;
// ERROR
// WIDTH = 18;
// LENGTH = 22;
// if
$m = 95;
// if($m < 50){
//     echo 'F';
// } else {
//     echo 'P';
// }
// Ternary operator
// ($m < 45) ? 'F' : 'P';
// $color = 'rED';
// switch(strtolower($color)){
//     case 'red': echo 'STOP';
//     break;
//     case 'orange': echo 'Ready';
//     break;
//     case 'green': echo 'Go..!';
//     break;
//     default:
//     echo 'ErroR..!';
// }
// for($x=0; $x<10; $x++){
//     echo 'password' . $x+1 . '<br>';
// }
// $x=0;
// while($x<10){
//     echo 'password' . $x+1 . '<br>';
//     $x++;
// }
// $x = 1;
// do{
//     echo 'Start code...';
// } while($x<1);
$arrVar = [1, 'ABC', false, 88.8];
// foreach($arrVar as $c){
//     echo $c . '<br>';
// }

//FUNCTION
// $a = 10;
// $b = 15;
function sumA_B($a, $b = 0){
    echo $a + $b;
}

// sumA_B(10, 15);


function welcomeUser($name = 'Visitor'){
    echo 'Welcome' . $name;
}

welcomeUser();
?>