<?php 
	/**
	* Database Connection
	*/
	// class DbConnect {
	// 	private $server = 'localhost';
	// 	private $dbname = '20IT0504';
	// 	private $user = 'root';
	// 	private $pass = '';

	// 	public function connect() {
	// 		try {
	// 			$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
	// 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 			return $conn;
	// 		} catch (\Exception $e) {
	// 			echo "Database Error: " . $e->getMessage();
	// 		}
	// 	}
	// }

		$mysqli = new mysqli("localhost", "root", "", "20IT0504");

		if ($mysqli -> connect_error) {
			echo "Failed";
			exit();
		} else {
			echo "success<br/>";
		}


 ?>