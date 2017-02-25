<?php 
	require_once('dbconfig.php');
	require_once('helper.php');
	require_once('../PHPMailer/PHPMailerAutoload.php');
	
	// Definicija pristupnih podataka za mail client
	define('GM_USER', 'imamovic.haris.00@gmail.com');
	define('GM_PASS', '*6ParadoxX9*');

	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	// ----------------------------------------------------->
	//        Class representation of a single user
	// ----------------------------------------------------->
	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	class User
	{
		// Private attributes
		private $db_handle;
		private $name;
		private $surname;
		private $username;
		private $email;
		private $password;
		private $id;

		// Public properties
		public $notification;
		public $validityError;
		
		// Constructor
		public function __construct()
		{
			$db = new Database();
			$this->db_handle = $db->ConnectToDatabase();
			$this->name = "";
			$this->surname = "";
			$this->username = "";
			$this->email = "";
			$this->password = "";
			$this->id = 0;

			$this->notification = "";
			$this->validityError = "";
		}


		// ----------------------------------------------------->
		//         		   		 Getters
		// ----------------------------------------------------->
		public function getName() {
			return $this->name;
		}

		public function getSurname() {
			return $this->surname;
		}

		public function getUsername() {
			return $this->username;
		}

		public function getEmail() {
			return $this->email;
		}


		// ----------------------------------------------------->
		//         				Validation
		// ----------------------------------------------------->

		// Private method for validating password content
		function validatePassword($pass) {
			return preg_match('/^[A-Za-z0-9_\-]{3,30}$/', $pass);
		}

		// Private method for validating usen content
		function validateEmail($email) {
			return filter_var($email, FILTER_VALIDATE_EMAIL);
		}

		// Private method for validating name and surname
		function validateNames($name) {
			return preg_match('/^[A-Za-z ]{2,30}$/', $name);
		}

		// Private method for validating username
		function validateUsername($uname) {
			return preg_match('/^[A-Za-z0-9_-]{2,30}$/', $uname);
		}

		// Private method for checking is the given email already in use
		function isUniqueEmail($email)
		{
			// Cleaning the input
			$email = htmlentities($email, ENT_QUOTES);

			try {
				$stmt = $this->prepareQuery('SELECT COUNT(*) FROM user WHERE email = :mail');
				$stmt->bindParam(':mail', $email, PDO::PARAM_STR);
				$stmt->execute();

				$count = $stmt->fetchColumn();
				if( $count == 0 ) return true;
				else return false;
			}
			catch(PDOException $e) {
				// echo "Problem sa bazom. " . $e->getMessage(); 
				echo 'Problem sa bazom.';
			}

			return false;
		}

		// Private method for checking is the given username already in use
		function isUniqueUsername($username)
		{
			// Cleaning the input
			$username = htmlentities($username, ENT_QUOTES);

			try {
				$stmt = $this->prepareQuery('SELECT COUNT(*) FROM user WHERE username = :username');
				$stmt->bindParam(':username', $username, PDO::PARAM_STR);
				$stmt->execute();

				$count = $stmt->fetchColumn();

				if( $count == 0 ) return true;
				else return false;
			}
			catch(PDOException $e) {
				// echo "Problem sa bazom. " . $e->getMessage(); 
				echo 'Problem sa bazom.';
			}

			return false;
		}

		// Public Method for validating user inputs 
		public function validateAndSetCredentials($name, $surname, $username, $email, $pw, $cpw) {
			$this->validityError = "";

			if( !$this->validateNames($name) ) {
				$this->validityError = "Unešeno ime nije u ispravnom formatu.";
				return false;
			}
			
			if( !$this->validateNames($surname) ) {
				$this->validityError = "Unešeno prezime nije u ispravnom formatu.";
				return false;
			}

			if( !$this->validateUsername($username) ) {
				$this->validityError = "Unešeno korisničko ime nije u ispravnom formatu.";
				return false;
			}

			if( !$this->validateEmail($email) ) {
				$this->validityError = "Email adresa nije ispravnog formata.";
				return false;
			}

			if( !$this->validatePassword($pw) || !$this->validatePassword($cpw) ) {
				$this->validityError = "Šifra nije u ispravnom formatu";
				return false;
			}

			if( strcmp($pw, $cpw) != 0 ) {
				$this->validityError = "Šifre se ne podudaraju";
				return false;
			}

			if( !$this->isUniqueEmail($email) ) {
				$this->validityError = "Već postoji račun sa datom email adresom";
				return false;
			}

			if( !$this->isUniqueUsername($username) ) {
				$this->validityError = "Već postoji korisnik sa identičnim imenom";
				return false;
			}

			// If all data is valid we can set it to internal properties
			$this->name = $name;
			$this->surname = $surname;
			$this->username = $username;
			$this->email = $email;
			$this->password = password_hash($pw, PASSWORD_DEFAULT);

			return true;
		}


		// ----------------------------------------------------->
		//         		   Database manipulation
		// ----------------------------------------------------->

		// Retrieve ID of last inserted row
		public function LastID()
		{
			$stmt = $this->db_handle->lastInsertId();
			return $stmt;	
		}

		// Private Method for inserting new user into DB
		function insertUser()
		{
			try {
				$stmt = $this->prepareQuery('INSERT INTO user (first_name, last_name, username, password, email, avatar_id, role_id)
											VALUES (?, ?, ?, ?, ?, null, 2)');

				// Binding parameters
				$stmt->bindParam(1, $this->name, PDO::PARAM_STR);
				$stmt->bindParam(2, $this->surname, PDO::PARAM_STR);
				$stmt->bindParam(3, $this->username, PDO::PARAM_STR);
				$stmt->bindParam(4, $this->password, PDO::PARAM_STR);
				$stmt->bindParam(5, $this->email, PDO::PARAM_STR);

				// Exec. the query
				$stmt->execute();
				return true;
			}
			catch(PDOException $e) {
				// echo "Problem sa unosnom u bazu. " . $e->getMessage(); 
				echo 'Problem sa unosom u bazu.';
			}

			return false;
		}

		// Private Method for activating users account
		function activateAccount($id, $authkey)
		{
			$id = intval(clearInput(base64_decode($id)));
			$authkey = clearInput(base64_decode($authkey));

			if( $id < 1 ) return false;

			try {
				// get users email
				$stmt = $this->prepareQuery('SELECT email FROM user WHERE id = ? LIMIT 1');
				$stmt->bindParam(1, $id, PDO::PARAM_INT);
				$stmt->execute();
				$res = $stmt->fetch(PDO::FETCH_OBJ);

				if( !password_verify($res->email, $authkey) ) {
					$this->validityError = "Registracijski kod ne odgovara korisničkom računu.";
					return false;
				}

				// activate users account
				$activateStmt = $this->prepareQuery('UPDATE user SET active = 1 WHERE id = :id');
				$activateStmt->bindParam(':id', $id, PDO::PARAM_INT);
				$activateStmt->execute();
				return true;
			}
			catch(PDOException $e) {
				echo "ERROR";
			}
			
			return false;
		}


		// ----------------------------------------------------->
		//         			Private methods
		// ----------------------------------------------------->

		// Private method for preparing queries
		function prepareQuery($query) {
			$stmt = $this->db_handle->prepare($query);
			return $stmt;
		}


		// ----------------------------------------------------->
		//         			Public methods
		// ----------------------------------------------------->

		// Public method for registering user, wrappper
		public function signUp()
		{
			if( !$this->insertUser() )
				return false;

			$this->id = $this->LastID();
			$res = $this->emailVerificationCode();
			return $res;
		}

		// Method for loging in the user 
		public function login()
		{
			// Getting the password hash and user role ID
			$stmt = $this->prepareQuery('SELECT password, role_id FROM user WHERE email = :mail LIMIT 1');
			$stmt->bindParam(':mail', $this->email, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);

			// Getting user role
			$roleQuery = $this->prepareQuery('SELECT role_tag from role where id = :rid');
			$roleQuery->bindParam(':r_id', $result->role_id, PDO::PARAM_INT);
			$roleQuery->execute();
			$role = $roleQuery->fetch(PDO::FETCH_OBJ);

			// Checking credentials
			if( password_verify($this->password, $result->password) ) {
				$_SESSION['logged_user'] = $this->email;
				$_SESSION['role'] = $roleQueryResult->role_tag;
				
				// If password matches redirect to corresponding page
				openUserProfile($roleQueryResult->role_tag); 
				return true;
			}
			else $this->notification = 'Neispravni pristupni podaci';

			return false;
		}
		
		// Method for logging out
		public function logout() {
			session_unset();
		}

		// Public method for sending verification emails
		public function emailVerificationCode() {
			$success = "";
			$sender = "Post Scriptum";
			$subject = "Verifikacija korisnickog racuna";
			$path = "http://localhost:8080/PostScriptum/post%20scriptum/pages/aktivacija.php?id=".
				base64_encode($this->id)."&authkey=".base64_encode(password_hash($this->email, PASSWORD_DEFAULT));

			$body = '<html lang="bs">
						<body style="color: #000000;">
							<h2>Pozdrav '.htmlentities($this->username).',</h2><br>
							<p>Potrebno je da kliknete na ovaj <a href="'.$path.'">link</a> kako bi aktivirali Vaš <b>PostScriptum</b> korisnički račun.</p>
						</body>
					</html>';

			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPDebug = 0;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAutoTLS = false;
			$mail->IsHTML(true);
			$mail->Host = 'smtp.gmail.com'; // GMail
		    $mail->Port = 587;

			// ---------- From and to addreses --------------------------------------
		    $mail->Username = GM_USER;
		    $mail->Password = GM_PASS;
		    $mail->SetFrom(GM_USER, $sender);
		    $mail->Subject = $subject;
		    $mail->Body    = $body; 
		    $mail->AddAddress($this->email);
		    //-----------------------------------------------------------------------

		    if(!$mail->Send()) {
		        //$error = "Mailer Error:'' . $mail->ErrorInfo;
		        $success = 'Izvinjavamo se, došlo je do greške. Registracija nije trenutno moguća.';
		        return false;
		    }
		    else {
		        $success =  'Message has been sent';
		        return true;
		    }
		}

		// Opens user profile page based on users role
		public function openUserProfile()
		{
			if( !isset($_SESSION['role']) ) return false;
			$role = strtolower($_SESSION['role']);

			if( $role == 'admin' )
				header('../pages/private/admin_panel_main.php');

			elseif( $role == 'member' )
				header('../pages/private/member_profile.php');

			else return false;
		}
	
	}	// END OF CLASS "USER"

?>