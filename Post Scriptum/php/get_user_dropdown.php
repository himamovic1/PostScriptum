<?php 
	include('aditionalScripts.php');
	session_start();

	if(!accessControl()) {
		http_response_code(401);
	}
	else {
		// DB Connection
		$database = ConnectToDatabase();

		$roleQuery = $database->prepare('SELECT role_tag from role where id = :r_id');
		$roleQuery->bindParam(':r_id', $_SESSION['role']);
		$roleQuery->execute();

		$roleQueryResult = $roleQuery->fetch(PDO::FETCH_OBJ);


		if( strtolower($_SESSION['role']) == 'member' ){
			echo '<li><a href="korisnicki_profil.php">Postavke profila</a></li>
				  <li class="divider"></li>
				  <li><a href="../php/odjava.php">Odjava</a></li>';
		}
		elseif( strtolower($_SESSION['role']) == 'admin' ) {
			echo '<li><a href="admin_panel_main.php">Postavke profila</a></li>
				  <li><a href="#">Nova vijest</a></li>
				  <li class="divider"></li>
				  <li><a href="../php/odjava.php">Odjava</a></li>';
		}
		//$_SESSION['username']
	}

?>