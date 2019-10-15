<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./style signup.css">
    <title>Sign up</title>
  </head>
  <body>
    <form action="Sign_up_action_page.php" method="get" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Username1"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username1"required>

    <label for="Password1"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password1" required>

    <label for="Password-repeat1"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="Password-repeat1" required>


    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="./index.html">Cancel</a></button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
  </body>
</html>
