<?php
	// Output an HTML message
	function message($msg = ""){
		$output = "";

		if(!empty($msg) || $msg !== "0"){
			$output .= "<p class='message'>";
			$output .= $msg;
			$output .= "</p>";
		}

		return $output;
	}

	// Autoloader function to load a Class not required
	function __autoload($class_name){

		$path = "class." . $class_name . ".inc";

		if(file_exists(CLASS_PATH . $path)){
			require_once($path);
		}else{
			echo CLASS_PATH . "<br>";
			die( "'" .ucfirst($class_name) . "'" . " class could not be found or loaded.");
		}
	}

	// Output message with an HTML <pre> tag - (usefull for examing arrays)
	function pre($array = array()){
		if(!empty($array)){
			echo "<pre>";
			print_r($array);
			echo "</pre>";
		}
	}
