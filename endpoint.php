<?php 
require "main.php";

$main = new Main();

if(isset($_POST['register'])){

	$name = $_POST['name'];
	$email = $_POST['email'];


	$autthor_data = array(
		"author_name" => htmlspecialchars($name), "author_email" =>htmlspecialchars($email)
	);
	var_dump($autthor_data);
	$res = $main->addAuthor($autthor_data);

	var_dump($res['msg']);
}