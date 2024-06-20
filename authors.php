<?php
include "main.php";
$main = new Main();


$authors_response = $main->getAuthors();

if($authors_response){
	$counter = 1;
	while($author = $authors_response->fetch_assoc()){
		echo "Author $counter <br>Name: ".$author['name']." Email: ".$author['email'];
	}
}else{
	echo "Failed to get authors";
}
?>
