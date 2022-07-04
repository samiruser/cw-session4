<?php

// for, while, foreach, do while
// increment
for( $counter = 1; $counter < 10; $counter++){

	// 
	// 
	// 
	echo 'Counter: '. $counter .'<br>';
}



// decrement
$i = 100;

for(; $i >= 10; $i = $i - 10){

	$new_variable = '';

	echo "i: ". $i .'<br>';
}



$number = 40;

echo 'Number initially: '. $number .'<br>';

while( $number > 6  ) {

	$number = $number / 2;

	echo '<br>';
	for($k = 0; $k <= $number; $k++){
		echo '*';
	}
	echo '<br>';
	

	echo 'Number now: '. $number .'<br>';

}

echo 'Number after the while loop: '. $number .'<br> <br> <br> <br> <br>';



// foreach loop


$names = [
	"Ahmad", "Asad", "Fatemah", 
	"Sara", "Mahmood"
];


// echo count($names);

for($i = 0; $i < count($names) ; $i++){
	echo $names[$i] .'<br>';
}


foreach($names as $n){
	echo 'Name: '. $n .'<br>';
}


$student = [
	'first_name' => 'Ahmad',
	"last_name" => 'Asadi',
	'age' => 23,
	'is_passed' => true
];

foreach($student as $key => $value){
	echo $key .': '. $value .'<br>';
}

// foreach($student as $temp){
// 	echo $temp .'<br>';
// }

