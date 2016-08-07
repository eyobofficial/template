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
	defined("SITE_ROOT") ? null : 
		define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . DS . "template");

	// Library Path
	defined("LIB_PATH") ? null : define("LIB_PATH", SITE_ROOT . DS . "includes");


	// Databse Constants
	define("DB_HOST", "localhost");
	define("DB_USER", "");
	define("DB_PASS", "");
	define("DB_NAME", "");