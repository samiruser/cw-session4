<?php

// 0: Active, 1: Active , 2: Inactive, 3: Blocked, 4: Disabled, ... None;

$status = 0;
$label = null;

switch($status){

	case 0:
	case 1:
		$label = 'Active';
		break;

	case 2:
		$label = 'Inactive';
		// 
		// 
		// 
		break;
	
	case 3:
		$label = 'Blocked';
		break;
	
	case 4:
		$label = 'Disabled';
		break;
	
	default:
		$label = 'None';
		// break;
}

echo 'Your account status is '. $label;

