<?php 
	
	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	// ------------------------------------------------>
	//   Helper functions for server side manipulation
	// ------------------------------------------------>
	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	// Funkcija za sredjivanje ulaznih tekstualnih podataka
	function clearInput($input) {
		return htmlentities(stripslashes(trim($input)));
	}

	// Function for validating password content
	function validatePassword($pass) {
		return preg_match('/^[A-Za-z0-9_\-]{3,30}$/', $pass);
	}

	// Function for validating usen content
	function validateEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
		//return preg_match('/^[A-Za-z0-9_\-@.]{3,30}$/', $email);
	}

	// Function for validating name and surname
	function validateNames($name) {
		return preg_match('/^[A-Za-z_\-]{3,30}$/', $name);
	}


	// http://localhost:8080/PostScriptum/post%20scriptum/pages/aktivacija.php?id=Mw==&uthkey=JDJ5JDEwJER2Rm5jMk5PekwyY3pMYzkzWDMyaWVtbS9aT21sRGw5VXZqc0tSNFVGRGdLNUR4ZnJYQnZ5
?>