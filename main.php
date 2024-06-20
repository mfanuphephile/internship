<?php
require "db.php";
class Main Extends Database{
	
	public function getAuthors(){
		$authors_request_query = "SELECT * FROM users";

		//$authors_response = Database::query($authors_request_query);
		$authors_response = $this->query($authors_request_query);

		return $authors_response;
	}
	public function addAuthor($data){
		$name = $data['author_name'];
		$email = $data['author_email'];
		$reg_request = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

		$reg_res = $this->query($reg_request);

		if($reg_res){
			return array("response" =>true, "msg" =>"Author added succesfully");
		}else{
			return array("response" =>false, "msg" =>"Failed to add author");
		}

	}

}