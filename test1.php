<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <form action="test2.php" method="post" enctype="multipart/form-data">
  <div class="loginBox">
    <label for="profilePhoto" id="profilePhotoLabel">
      <input id="profilePhoto" type="file" name="profilePhoto" style="display: none;">
      <img id="loginFoto" src="pro.png" style="height: 400px; margin-top: 60px; margin-left: 30px; width: 400px;" alt="">
    </label>
    <p id="registerText">REGISTER</p>
    <p id="unameBluebox"></p>
    <input id="loginbarUname" type="text" class="form-control" id="name" name="username" placeholder="name">
    <p id="wwBluebox"></p>
    <input id="loginbarWw" type="email" class="form-control" id="email" name="password" placeholder="email">

    <input id="loginbarWw" type="age" class="form-control" id="age" name="password" placeholder="age">

    <button id="loginButton" type="submit">Register</button>
  </form>
  </div>
</body>
</html>