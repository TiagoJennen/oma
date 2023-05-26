<?php
session_start();
include_once("conn.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) {
        header("Location: register.php?error=User Name is required");
        exit();
    }
	else if(empty($password)){
        header("Location: register.php?error=Password is required");
        exit();
    }

	
		$stmt = $con->prepare("INSERT into users(username, password) values(?, ?)"); 
		$stmt->bind_param("ss", $username, $password);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$con->close();
		header("Location: login.php");
		exit();
	

?>


