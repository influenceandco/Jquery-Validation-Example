<?php

include("../scripts/dbconnect.php");

$name = $_POST["name"];
$email = $_POST["email"];



if($name && $email){
	
	
	/////insert data into database
	
	echo true;
	
}else{
	
	echo "Something went wrong.";
	
	
}


?>