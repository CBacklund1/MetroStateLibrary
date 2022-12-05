<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <title>Log In</title>
    <style>
    .error {color: #FF0000;}
    </style>
  </head>

  <!--script for header-->
  <script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>


<br></br>
<?php
  $nameErr = "Username is required";
  $passErr = "Password is required";
?>
<body onload = "signOutUser()">
    <!--Insert Page Heading-->
    <div class="heading">
      <h1>Login</h1>
  </div>
    <div class="contact_container">
      <form action= "loginsubmit.php" method="POST">
      <p><label for="username">Username:</label></p>
<input id="username" name="username" rows="1" cols="50" oninput= 'validateUserInput()'> </input>
<span class="error" id = "usernameError">*Username is required </span>

<p><label for="password">Password:</label></p>
<input id="password" type = "password" name="password" rows="1" cols="50" oninput= 'validatePasswordInput()'> </input>
<span class="error" id = "passwordError">*Password is required </span>


<br>
<input type="submit" class = "button button-primary" value="Submit" ">
<br>
<br>
      </form>
    </div>
  </body>
  <!--script for footer-->
  <script
    language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
</html>
