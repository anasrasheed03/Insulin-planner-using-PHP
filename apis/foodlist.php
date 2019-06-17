<?php 

	define('DB_HOST', 'localhost');
	define('DB_USER', 'logicalh_farwa');
	define('DB_PASS', 'Racespeed@#!@');
	define('DB_NAME', 'logicalh_farwa');
	
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	$stmt = $conn->prepare("SELECT foodName, foodQuantity, foodCalorie FROM `diet-chart`;");
	
	$stmt->execute();
	
	$stmt->bind_result($foodName, $foodQuantity, $foodCalorie);
	
	$foods = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['foodName'] = $foodName; 
		$temp['foodQuantity'] = $foodQuantity; 
		$temp['foodCalorie'] = $foodCalorie; 
		array_push($foods, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($foods);
	
	