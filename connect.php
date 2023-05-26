<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($email)) {
        header("Location: registreren.php?error=User Name is required");
        exit();
    }
	else if(empty($password)){
        header("Location: registreren.php?error=Password is required");
        exit();
    }

	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(userName, password) values(?, ?)"); 
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
		header("Location: index.php");
		exit();
	}

?>


