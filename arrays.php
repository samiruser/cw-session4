<?php

echo "Welcome! <br>";

$name = '';
$last_name = '';
$age = '';

$student_1 = [
	'first_name' => 'Ahmad',
	"last_name" => 'Asadi',
	'age' => 23,
	'is_passed' => true
];

$student_2 = [
	'first_name' => 'Fatemah',
	'last_name' => 'Karimi',
	'age' => 19,
	'is_passed' => true
];


echo $student_1['last_name'];

echo $student_2["age"];

$students = [
	$student_1, $student_2, ['first_name' => 'Mansoor', 'last_name' => 'Alokozay', 'age' => 22, 'is_passed' => false,]
];


echo '<br>';

echo $students[2]['last_name'];




