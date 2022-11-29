<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<?php


//needs user sessions here

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <!--Insert Page Name-->
    <title>Account Page</title>
</head>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>
    <br></br>
  <body onload = 'validateUser()'>
  <div class="heading">
  <h1>Welcome back!</h1> <br>


    <!--INSERt CODE TO RETURN USERS ID NUMBER-->

    </div>
    <br></br>
    
    <div class = "container">
      <!--Left side of screen-->
        <div class = "left_container">
          <img src="user.jpg" alt="user" width = "500"/>  
          <form method="POST" action="edituserinfo.php">
               <input type = "submit" value = "Edit Your Profile"/>
          </form>
        </div>

      <!--Right side of screen-->
        <div class = "right_container">
  
           <h2> Your books are: </h2><br>
              <table>
					      <tr>
                  <?php

                  
                     //insert code to show books user has 

                    ?>
                </tr>
	            </table>
<form method="POST" action="processPayment.php">
<h2>Enter Credit Card Details</h2><br />
          <h4></h4><br />
          <label for="user_id">Enter Your User ID</label><br />
          <input type="text" id="user_id" name="user_id" placeholder ="User ID" /><br />

          <label for="cardholder_name">Enter Cardholders Name:</label><br />
          <input type="text" id="cardholder_name" name="cardholder_name" placeholder ="Cardholder Name" /><br />

          <label for="card_number">Enter Card Number</label><br />
          <input type="text" id="card_number" name="card_number" placeholder = "Card Number"/><br />

          <label for="exp_date">Expiration Date</label><br />
          <input type="text" id="exp_date" name="exp_date" placeholder ="MMDD" /><br />

          <label for="card_code">Enter 3 or 4 digit Card Code</label><br />
          <input type="text" id="card_code" name="card_code" placeholder ="000" /><br />

          <label for="zip_code">Cardholder's Zip Code</label><br />
          <input type="text" id="card_code" name="card_code" placeholder ="12345" /><br />
          <input type="submit" value="Pay My Fees!!" />


</form>


</body>
   
	<!--script for footer-->
	<script language="javascript" type="text/javascript" 
  src="LibraryFooter.txt"></script>
	</body>
	</html>
