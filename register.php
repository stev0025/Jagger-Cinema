<?php //register.php
$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
		echo "Database in not online";
		exit;
}
		
if (empty($_POST['email']) || empty($_POST['password']) ||
		empty($_POST['password2']) || empty($_POST['name']) ||
		empty($_POST['salutation']) || empty($_POST['phonenumber']) ) {
	
	echo "All records to be filled in";
	exit;
}



$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$name = $_POST['name'];
$salutation = $_POST['salutation'];
$phonenumber = $_POST['phonenumber'];


if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
}

$sql = "INSERT INTO customers (name, salutation, email, password, phonenumber)
		VALUES ('$name', '$salutation', '$email', '$password', '$phonenumber')";
$result = $conn->query($sql);

if (!$result){
	echo "Your query failed.<br>";
	echo '<a href="homepage.php">go back home.</a>';
}
else{
	echo "Welcome ". $name . ". You are now registered<br>";
	echo '<a href="homepage.php">go back home.</a>';
}
?>