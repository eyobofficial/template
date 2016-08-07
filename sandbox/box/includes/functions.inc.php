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
		$class_name = strtolower($class_name);
		$path 		= $class_name . ".inc.php";

		if(file_exists(LIB_PATH . DS . $path)){
			require_once($path);
		}else{
			echo LIB_PATH . "<br>";
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
