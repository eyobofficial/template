<?php
	/**
	 * Configuration settings such as: 
	 *		- Database constants
	 * 		- Website Name
	 *		- Website Root Path
	 * 		- Library Path
	 *		- Directory separator
	 */

	// Website Name: 
	defined("WEBSITE_NAME") ? null : define("WEBSITE_NAME", "xxxx website");

	// Directory Separator
	defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

	// Website Root Path
	defined("SITE_ROOT") ? null : define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . DS . "sandbox" . DS . "box" . DS);

	// Library Path
	defined("LIB_PATH") ? null : define("LIB_PATH", SITE_ROOT . "includes" . DS);


	// Class Path
	defined("CLASS_PATH") ? null : define("CLASS_PATH", LIB_PATH . "class" . DS);


	// Helpers Path
	defined("HELPERS_PATH") ? null : define("HELPERS_PATH", LIB_PATH . "helpers" . DS);


	// Config Path
	defined("CONFIG_PATH") ? null : define("CONFIG_PATH", LIB_PATH . "config" . DS);


	// Admin Controllers
	defined("AC") ? null : define("AC", LIB_PATH . "controllers" . DS . "admin" . DS);


	// Public Controllers
	defined("PC") ? null : define("PC", LIB_PATH . "controllers" . DS . "PC" . DS);


	// Databse Constants
	define("DB_HOST", "localhost");
	define("DB_USER", "");
	define("DB_PASS", "");
	define("DB_NAME", "");