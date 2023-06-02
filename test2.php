<?php
session_start();
include_once("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

if (empty($name)) {
    header("Location: test1.php?error=Name is required");
    exit();
} else if (empty($email)) {
    header("Location: test1.php?error=email is required");
    exit();
} else if (empty($age)) {
    header("Location: test1.php?error=age is required");
    exit();
}

$stmt = $con->prepare("INSERT INTO form_submissions (name, email, age) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $age);
$execval = $stmt->execute();
echo $execval;
$stmt->close();
$con->close();
header("Location: profiel.php");
exit();
?>
