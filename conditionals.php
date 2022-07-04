<?php

$age = 10;

if($age >= 18){
	echo 'Welcome to my application';


}else{
	echo "You are not eligible";
}


$percentage = 70;

$grade = null;

if($percentage >= 90){
	$grade = 'A+';
}

else if($percentage >= 80){
	$grade = 'A';
}

else if($percentage >= 70){
	$grade = 'B';
}

else if($percentage >= 60){
	$grade = 'C';
}

else{
	$grade = 'F';
}

echo 'Your grade is: '. $grade;


