<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profiel</title>
  <link rel="stylesheet" href="profiel.css">
</head>
<body>
<div class="menu">
<ul class="navbar-nav ml-auto">
    <img class="menuFoto1" src="img/info.png" alt="" onclick="window.location.href='./info.php'">
    <img class="menuFoto" src="img/schema.png" alt="" onclick="window.location.href='./schema.php'">
    <img class="menuFoto2" src="img/profiel.png" alt="" onclick="window.location.href='./profiel.php'">
    <img class="menuFoto" src="img/faq.png" alt="" onclick="window.location.href='./faq.php'">
    </ul>
  </div>
  <div id="profielFoto">
  <?php
session_start();
include_once("conn.php");

if (isset($_SESSION['id'])) {
  $user_id = $_SESSION['id'];

  // Retrieve the profile photo filename or path from the database based on the user ID
  $stmt = $con->prepare("SELECT profile_photo FROM users WHERE id = ?");
  $stmt->bind_param("i", $user_id);
  $stmt->execute();
  $stmt->bind_result($profile_photo);
  $stmt->fetch();
  $stmt->close();

  // Display the profile photo if it exists
  if (!empty($profile_photo)) {
    echo '<img src="profile_photos/' . $profile_photo . '" alt="Profile Photo">';
  } else {
    echo 'No profile photo available.';
  }
} else {
  // User ID is not set, handle the case accordingly
  echo "Not Logged In.";
}
?>
<div id="profielbox">    
<p id=naam></p> 
<p id=E-mail></p> 
<p id=Leeftijd></p> 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Form is submitted
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];

echo '<p id="naamtext">' . "Naam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . htmlspecialchars($name) . '</p>';
echo '<p id="E-mailtext">' . "E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . htmlspecialchars($email) . '</p>';
echo '<p id="Leeftijdtext">' . "Leeftijd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . htmlspecialchars($age) . '</p>';
}?>



  </div>
  <button id="bewerken" onclick="window.location.href='./bewerken.php'">Bewerken</button>
  <button id="loguit" onclick="window.location.href='./login.php'">Log uit</button>
</body>
</html>
