<?php

require("../config.php");

$output = [];
$output['status'] = "nok";

do {
	//Check HTTP Method
	if($_SERVER['REQUEST_METHOD'] != "POST") {
		//$output['error'] = array();
		$output['error'][] = "HTTP Method not accepted";
		break;
	}

	//Check if we received what we wanted
	if(!isset($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ) {
		$output['error'][] = "Did not receive an email";
		break;
	}
	$mail = $_POST['mail'];

	// Create connection
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PWD, DATABASE);
	
	// Check connection
	if ($conn->connect_error) {
		$output['error'][] = "Internal server error";
	    //die("Connection failed: " . $conn->connect_error);
	    break;
	}

	$stmt = $conn->prepare("INSERT INTO interested (email) VALUES (?)");
	$stmt->bind_param("s", $email);

	// set parameters and execute
	$email = $mail;
	$stmt->execute();


	$output['message'] = "We're all set!";
	$output['status'] = "ok";
} while(0);

echo json_encode($output);

?>