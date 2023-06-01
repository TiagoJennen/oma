<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="profiel.css">
</head>
<body>
<div class="menu">
    <img class="menuFoto" src="info.png"  style="margin-left: 230px;" alt="" onclick="window.location.href='./info.php'">
    <img class="menuFoto" src="schema.png" alt="" onclick="window.location.href='./schema.php'">
    <img class="menuFoto" src="profiel.png" alt="" onclick="window.location.href='./profiel.php'">
    <img class="menuFoto" src="faq.png" alt="" onclick="window.location.href='./faq.php'">
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
<p id="naamtext">Naam:</p>
<p id="naam"></p>
<p id="Leeftijdtext">Leeftijd:</p>
<p id="Leeftijd"></p>
<p id="E-mailtext">E-mail:</p>
<p id="E-mail"></p>
</div>
  </div>
</body>
</html>
