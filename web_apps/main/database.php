<?php
class Database {
	private $database;
	private $servername = "localhost";
	private $username = "admin";
	private $password = "admin";
	private $dbname = "mainDB";

	
	function __construct() {
		$this->database = $this->getConnection();
	}
	
	function __destruct() {
		$this->database->close();
	}
	
	/*function exec($query) {
		$this->database->exec($query);
	}*/
	
	function query($query) {
		$result = $this->database->query($query);
		return $result;
	}
	
	/*function querySingle($query) {
		$result = $this->database->querySingle($query);
		return $result;
	}*/
	
	/*function prepare($query) {
		return $this->database->prepare($query);
	}*/
	
	/*function escapeString($string) {
		return $this->database->escapeString($string);
	}*/
	
	private function getConnection() {
		$conn = new mysqli("localhost", "admin", "admin", "mainDB");
		/*if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
		echo "Connected successfully";*/
		
		/*$sqla = "SELECT * FROM users";
		$result = $conn->query($sqla);
		if ($conn->query($sqla) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sqla . "<br>" . $conn->error;
		}
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["userid"].$row["uname"];
			}
		}	 
		else {
			echo "0 results";
		}*/
		return $conn;
	}
	
	/*private function getConnection() {
		$link = mysqli_connect("127.0.0.1", $username, $password, $dbname);

		if (!$link) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}

		echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
		echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
		
		$sql = "SELECT * FROM users";
		printf("%s", $sql);
		$res = $link->mysql_query($sql);
		echo $link->mysql_error();
		echo $res;
		
	}*/
	
	function lastId() {
		$id = $this->database->insert_id;
		return $id;
	}
}
