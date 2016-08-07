<?php
	// Intantiate a database connection object
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check for connection error
	if($db->connect_errno){
		die("Database connection error. Please try again! " . "(" . $db->connect_error . ")");
	}