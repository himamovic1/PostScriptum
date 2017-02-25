<?php 
	
	/**
	*  Class representation for database
	*/
	class Database
	{
		// Private attributes
		private $host = 'localhost';
		private $db_name = 'postscriptumdb';
		private $username = 'psadmin';
		private $password = 'admin';	

		// Public handle to database
		public $db_handle;


		// Public method for connecting to the database
		public function ConnectToDatabase() {
			$this->db_handle = null;

			try {
				$this->db_handle = new PDO("mysql:dbname=".$this->db_name.";host=".$this->host.";charset=utf8", $this->username, $this->password);
				$this->db_handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->db_handle->exec("set names utf8");
			}
			catch(PDOException $e) {
				echo "DB connection Error: " . $e->getMessage();
				//echo "Došlo je do neočekivane greške";
			}

			return $this->db_handle;
		}

	}

?>