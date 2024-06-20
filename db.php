<?php
class Database{
	$severname = "192.168.100.31";
	$username = "root";
	$password = "";
	$dbname = "internship";


	$conn = new mysqli($severname, $username, $password, $dbname);
	if($conn -> connect_error){
		die("Database Connection Failed: ".$conn->connect_error);
	}
	
	private static function query($query){
		global $conn;
		return $conn->query($query);
	}
}
?>