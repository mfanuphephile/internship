<?php
class Database{

	private static function connect(){
		$severname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "internship";


		$conn = new mysqli($severname, $username, $password, $dbname);
		if($conn -> connect_error){
			die("Database Connection Failed: ".$conn->connect_error);
		}
		return $conn;
	}
	
	public static function query($query){
		$conn = Database::connect();

		return $conn->query($query);
	}
}
?>