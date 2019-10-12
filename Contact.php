<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../My website/style contact.css">
    <title>Contact</title>
  </head>
  <body>
    <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">

    <div class="column">
      <form action="">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>

        <div class="container" style="background-color:#f1f1f1">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
          <button type="buttonsubmit" class="submitbtn"><a href="../My website/Mywebsite.html">Submit</a> </button>
          <button type="buttoncancel" class="cancelbtn"><a href="../My website/Mywebsite.html" >Cancel</a></button>
      </div>
</form>
  </div>
</div>
  </body>
</html>
