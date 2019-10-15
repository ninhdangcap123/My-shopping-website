<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./style login.css">

    <title>Login</title>
  </head>
  <body>
    <form action="Login_action_page.php">


  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="./index.html">Cancel</a></button>
    <button type="button" class="signupbtn"><a href="./Sign%20up.php">Sign up</a></button>
    <span class="password">Forgot<a href="#" class="link">password?</a></span>
  </div>
</form>
  </body>
</html>
