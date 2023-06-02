<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <form action="authenticate.php" method="post">
    <div class="loginBox">
      <img id="loginFoto" src="fit.jpg" alt="">
      <p id="loginWelcome">WELCOME BACK</p>
      <p id="loginLine">____________________________________________</p>
      <p id="loginText">LOGIN</p>
      <p id="unameBluebox"></p>
      <input id="loginbarUname" type="text" name="username" placeholder="Username">
      <p id="wwBluebox"></p>
      <input id="loginbarWw" type="password" name="password" placeholder="Password">
      <p id="loginToRegister" onclick="window.location.href='./register.php'">Make an Account</p>
      <button id="loginButton" type="submit">Login</button>
    </div>
  </form>
</body>
</html>
