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
    <link rel="stylesheet" href="css/styles.css" />
    <title>Create Account</title>
  </head>
   
<!--script for header-->
<script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>

<br></br>
<body>
  
    <!--Insert Page Heading-->
      <div class = "heading">
    <h1>Create Account</h1><br><br>
    <h2>Create a Library Account</h2>
</div>
    <div class="container">
      <div class="left_container">
        <img src="checkoutbook.jpg" alt="checkout" width="500px" />
        <br/>
        <h3>
          "I just love the convience that the Library has to offer me."
        </h3>
        <br />
        <div class="user">
          <img src="user.jpg" alt="user" width="75px" height="75px" />
          <h4>
            Florence Hughes <br />
            <em>MetroState Student and Library User</em>
          </h4>
          <br/>
          <br/> <br/> <br/>
        </div>
        
      </div>
      <div class="right_container">
        <form action="newaccount.php" method="POST">
          <h2>New Users</h2><br />
          <h4></h4><br />
          <label for="first_name">Your First Name:</label><br />
          <input type="text" id="first_name" name="first_name" placeholder ="First Name" /><br />
          <label for="last_name">Your Last Name:</label><br />
          <input type="text" id="last_name" name="last_name" placeholder ="Last Name" /><br />
          <label for="email">Email Address:</label><br />
          <input type="text" id="email" name="email" placeholder = "Email"/><br />
          <label for="username">User Name:</label><br />
          <input type="text" id="username" name="username" placeholder ="User Name" /><br />
          <label for="password">Password:</label><br />
          <input type="password" id="password" name="password" placeholder ="Enter a Password" /><br />
          <label for="address">Address:</label><br />
          <input type="text" id="address" name="address" placeholder ="Address" /><br />
          <input type="submit" class = "button button-primary" value="Create Account" />
        </form>
        
      </div>
      <form action = "loginform.php" method = "POST">
          <h2> Already have an account? Sign in below! </h2>
          <input type = "submit" class = "button button-primary" value = "Sign in" />
          </form>
    </div>
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
		<h1></h1> <br>
		<h4>Questions or any last reservations? Reach out to our Library Coordinator.</h4><br><br>
		<form method="POST" action="contactform.php">
			<input type = "submit" class = "button button-primary" value = "Contact Us"/>
		</form>
    <!--script for footer-->
    <script
    language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
    
  </footer>
  
   
</html>
