<?php 
	session_start();

	if(isset($_SESSION['username']) && isset($_SESSION['role'])) {
		session_unset();
		header("Location: ../pages/index.php"); // Redirect to home page
	}
 ?>