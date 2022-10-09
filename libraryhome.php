<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>MetroState Library Home Page</title>
  </head>
  <body>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>


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
<br></br>
    <!--Insert Body of Page-->
      <div class = "container">
		<div class= "leftContainer">
			<h2>Refer a Friend Today!</h2>
			<br></br>
			<p> MetroState Library is your place for books. It is no secret that books can be an expensive purchase to place onto students, who likely will not be keeping the books long term.</p>
			<br></br>
			<h4>The library promises to alleviate this burden by providing individuals with the ability to rent the books for a short period of time.However the cost of inventory maintenance puts added stress on the library.</h4>
			<p>Individuals can choose their desired books, the library will stock and maintain inventory, and individuals can choose which option (rent/buy) that best fits their needs. </p>

			<br></br>
			<p> Create An account below </p>
			<br></br>
			<form method="POST" action="createaccount.php">
				<input type="submit" value="Create Account" />
			</form>
		</div>
	
	
		<div class= "rightContainer">
			 <img src="librarybooks.jpg" alt="books" width="500px" />
		</div>
	</div>
	<br></br>
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
