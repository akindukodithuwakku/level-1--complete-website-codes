<?php

require 'database.php';

if (!empty($_POST)) {
	// keep track post values
	$name = $_POST['name'];
	$id = $_POST['id'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$location = $_POST['location'];
	$purpose = $_POST['purpose'];

	// insert data
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO visitor_table (name,id,gender,email,mobile,location,purpose) values(?, ?, ?, ?, ?, ?, ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($name, $id, $gender, $email, $mobile, $location, $purpose));
	Database::disconnect();
	header("Location: user data.php");
}
