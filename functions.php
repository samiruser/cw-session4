<?php

// die('message to show');

// two types of functions 1) Built in functions 2) Custom functions

$message = 'I love PHP!';

$length = strlen($message);

$name = 'Ah';

$name_length = strlen($name);

if($name_length < 3){
	echo '<p style="color: red;">Name cannot be less than 3 characters!</p>';
}

// 

$number = pow(2, 5);

echo $number;

// w3school

my_printer($number);


$num1 = 10;
$num2 = 20;

$result = multiply($num1, $num2);

echo $result;

my_printer($result);


// my functions


function my_printer($n){
	// $result = $n * 2;
	$result = multiply($n, 2);

	echo '<b style="color: green;">'. $result .'</b>';
}


function multiply($n1, $n2){
	return $n1  * $n2;
}