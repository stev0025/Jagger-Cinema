<?php //register.php

$conn = new mysqli('localhost','f34ee', 'f34ee', 'f34ee');
if ($conn->connect_error){
		echo "Database in not online";
		exit;
		
if (empty($_POST['email']) || empty($_POST['password']) ||
		empty($_POST['password2']) || empty($_POST['name']) ||
		empty($_POST['salutation']) || empty($_POST['phonenumber']) ) {
	
	echo "All records to be filled in";
	exit;
}

$email = $_POST['email']
$password = $_POST['password']
$password2 = $_POST['password2']
$name = $_POST['name']
$salutation = $_POST['salutation']
$phonenumber = $_POST['phonenumber']

if ($password != 


?>