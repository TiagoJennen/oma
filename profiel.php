<?php
session_start();  
include_once("conn.php");

if (isset($_SESSION['id'])) {
  $user_id = $_SESSION['id'];
  // User ID is properly established, you can proceed with further operations
  echo "User ID: " . $user_id;
} else {
  // User ID is not set, handle the case accordingly
  echo "User ID is not set.";
}

$user_id = $_SESSION['id'];

?>

