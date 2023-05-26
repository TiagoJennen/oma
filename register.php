<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <form action="connect.php" method="post">
  <div class="loginBox">
    <img id="loginFoto" src="fit.jpg" alt="">
    <p id="loginWelcome">WELCOME BACK</p>
    <p id="loginLine">____________________________________________</p>
    <p id="registerText">REGISTER</p>
    <p id="unameBluebox"></p>
    <input id="loginbarUname" type="text" class="form-control" id="username" name="username" placeholder="Username">
    <p id="wwBluebox"></p>
    <input id="loginbarWw" type="password" class="form-control" id="password" name="password" placeholder="Password">
    <p id="loginToRegister" onclick="window.location.href='./index.php'">Back to Login</p>
    <button id="loginButton" type="submit">Register</button>
  </form>
  </div>
</body>
</html>