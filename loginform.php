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
    <link rel="stylesheet" href="styles.css" />
    <title>Contact Us</title>
  </head>

  <!--script for header-->
  <script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>


<br></br>
<body>
    <!--Insert Page Heading-->
    <div class="heading">
      <h1>Login</h1>
  </div>
    <div class="contact_container">
      <form action= "loginsubmit.php" method="POST">
      <p><label for="username">Username:</label></p>
<textarea id="username" name="username" rows="1" cols="50"> </textarea>

<p><label for="password">Password:</label></p>
<textarea id="password" name="password" rows="1" cols="50"> </textarea>


<br>
<input type="submit" value="Submit" ">
<br>
<br>
      </form>
    </div>
  </body>
  <!--script for footer-->
  <script
    language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
</html>
