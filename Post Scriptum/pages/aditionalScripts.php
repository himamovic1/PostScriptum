<?php 

// 											DATABASE
// --------------------------------------------------------------------------------------------->
// Funkcija koja kreira konekciju sa bazom
function ConnectToDatabase() {
	$db = new PDO("mysql:dbname=postscriptumdb;host=localhost;charset=utf8", "psadmin", "admin");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("set names utf8");

	return $db;
}
// --------------------------------------------------------------------------------------------->

// Funkcija za sredjivanje ulaznih tekstualnih podataka
function clearInput($input) {
	return htmlentities(stripslashes(trim($input)));
}

// Funkcija za provjeru ispravnosti pristupnih podataka
function checkCredentialsAndLogin($usr, $pass) {
	if( !validateUsername($usr) || !validatePassword($pass) )
		return false;

	// DB Connection
	$database = ConnectToDatabase();
	$loginStmt = $database->prepare('SELECT password, role_id FROM user WHERE username = :uname LIMIT 1');

	$loginStmt->bindParam(':uname', $usr);
	$loginStmt->execute();
	$result = $loginStmt->fetch(PDO::FETCH_OBJ); 

	$roleQuery = $database->prepare('SELECT role_tag from role where id = :r_id');
	$roleQuery->bindParam(':r_id', $result->role_id);
	$roleQuery->execute();

	$roleQueryResult = $roleQuery->fetch(PDO::FETCH_OBJ);

	// Ako su podaci ispracni prijavljujemo administratora
	if(password_verify($pass, $result->password)) {
		$_SESSION['username'] = $usr;
		$_SESSION['role'] = $roleQueryResult->role_tag;
		return true;
	}

	return false;
}

// Funkcija koja prikazuje error provider 
function accessError() {
	echo '<div style="width=100%; text-align: center;">
			<p class="errorProv">Nemate odgovarajuca prava pristupa</p>
		  	<a href="login.php" style="font-size: 1.6em;">Povratak na stranicu za prijavu</a>
		  </div>'; 
}

// Funkcija za provjeru prava pristupa
function accessControl() {
	return isset($_SESSION['username']) && isset($_SESSION['role']);
}

function accessControlAdmin() {
	return isset($_SESSION['username']) && strtolower($_SESSION['role']) == 'admin';
}

// Funcija koja preusmjerava korisnika na odgovarajucu profilnu stranicu
function redirect() {
	if( isset($_SESSION['username']) && isset($_SESSION['role']) ) {
		if( strtolower($_SESSION['role']) == 'member' )
			header("Location: korisnicki_profil.php");
		elseif( strtolower($_SESSION['role']) == 'admin' ) {
			header('Location: admin_panel_main.php');
		}
	}
}

// Funkcije za validaciju podataka koji se unose za sobe
function validateValues($name, $price, $desc, $picArray = null) {
	$regOne = preg_match('/^[a-zA-Z0-9 ]{1,40}$/', $name);
	$regTwo = preg_match('/^[0-9]+(\.|,)?[0-9]{0,2}$/', $price);
	$regThree = preg_match('/^[a-zA-Z0-9\.,!?\s]{1,1000}$/', $desc);

	$pics = false;
	if($picArray === null) $pics = true;
	else $pics = validateImage($picArray[0]) && validateImage($picArray[1]) && validateImage($picArray[2]);
	
	return ($regOne && $regTwo && $regThree && $pics);
}

function validateImage($imageName) {
	return preg_match('/^([a-zA-Z\-_0-9\/\:\.]*\.(jpg|jpeg|png))$/', $imageName);
}

// Funkcija za validaciju passworda
function validateUsername($username) {
	return preg_match('/^[A-Za-z0-9_\-]{3,30}$/', $username); // TODO: Change regex for username
}

function validatePassword($password) {
	return preg_match('/^[A-Za-z0-9_\-]{3,30}$/', $password); // TODO: Change regex for password
}

// Funkcija za validaciju
function validateQuery($queryStr) {
	return preg_match('/^[a-zA-Z0-9\.\/-_*]+[a-zA-Z0-9\.\/-_*\s]*$/', $queryStr);
}

?>