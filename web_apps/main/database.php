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
	
	function querySingle($query) {
		$result = $this->database->querySingle($query);
		return $result;
	}
	
	/*function prepare($query) {
		return $this->database->prepare($query);
	}*/
	
	/*function escapeString($string) {
		return $this->database->escapeString($string);
	}*/
	
	private function getConnection() {
		$conn = new mysqli($servername, $username, $password);
		return $conn;
	}
	
	/*function lastId() {
		$id = $this->database->querySingle("SELECT last_insert_rowid();");
		return $id;
	}*/
}
