<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<?php
session_start();

if(isset($_SESSION['loggedin'])){
	echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign Out" />';
}
if(!isset($_SESSION['loggedin'])){
	//header('Location: signin.php');
  echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign In" />';
	//exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <title>Contact Us</title>
    
  </head>

  <!--script for header-->
  <script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>

    <br></br>
<?php
 // $nameErr = "Username is required";
 // $passErr = "Password is required";
?>
<body>
    <!--Insert Page Heading-->
    <div class="heading">
      <h1>Login</h1>
  </div>
    <div class="contact_container">
      <form action= "authenticateUser.php" method="POST">
      <p><label for="username">Username:</label></p>
<input id="username" name="username" rows="1" cols="50" > </input>


<p><label for="password">Password:</label></p>
<input id="password" name="password" rows="1" cols="50" > </input>

</div>

<br>
<input type="submit" value="Submit" >
<br>
<br>
</form>
<div class="banner">
		<h1>Join the MetroState Library! <h1>
	  </div>
	  <br></br>
	  <div class = "mission">
	  <div class = "mission1">
		  <h1> Saves Money</h1> 
		  <h4>Borrow the books you need for FREE</h4>
		
	  </div>
	  <div class = "mission2">
		  <h1>Saves Time</h1>
		  <h4>This is your one-stop-shop for books.</h4>
		
		</div>
	  <div class = "mission3">
		  <h1>Saves Books</h1>
		  <h4>Recycle books by borrowing and returning them, as often as you'd like.</h4>
		  
		</div>
      </div>
    
</body>
<footer class = "signin_footer">
		<h1>Join Today</h1> <br>
		<h4>Questions or any last reservations? Reach out to us.</h4><br><br>
		<form method="POST" action="contactform.php">
			<input type = "submit" value = "Contact Us"/>
		</form>
	<!--script for footer-->
	<script language="javascript" type="text/javascript" 
  src="LibraryFooter.txt"></script>
	</body>
	</html>