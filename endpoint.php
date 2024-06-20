<?php 
require "main.php";

$main = new Main();

if(isset($_POST['register'])){

	$name = $_POST['name'];
	$email = $_POST['email'];


	$autthor_data = array(
		"author-name" => htmlspecialchars($name), "author-email" =>htmlspecialchars($email)
	);

	$res = $main->addAuthor($autthor_data);

	echo $res['msg'];
}