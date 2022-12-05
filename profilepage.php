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
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <style>
      .error {color: #FF0000;}
    </style>
    <!--Insert Page Name-->
    <title>Account Page</title>
</head>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>
    
    <br></br>
  <body onload = "init()">
	<div class="heading">
		<h1>Welcome back!</h1>
		<br>
		<!--INSERt CODE TO RETURN USERS ID NUMBER-->
	</div>
    
    <div class = "container">
		<!--Left side of screen-->
		<div class = "left_container">
		  <img src="profilePic.png" alt="user" width = "500"/>  
		  <form method="POST" action="edituserinfo.php">
			   <input type = "submit" class = "button button-primary" value = "Edit Your Profile"/>
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
          <input type="text" id="user_id" name="user_id" placeholder ="User ID" oninput= "validateUserIdInput()"/>
          <span class="error" id = "user_id_error">*User ID is required </span>
          <br />

          <label for="cardholder_name">Enter Cardholders Name:</label><br />
          <input type="text" id="cardholder_name" name="cardholder_name" placeholder ="Cardholder Name" oninput= "validateCardHolderNameInput()"/>
          <span class="error" id = "cardholder_name_error">*Card holder's name is required </span>
          <br />

          <label for="card_number">Enter Card Number</label><br />
          <input type="text" id="card_number" name="card_number" placeholder = "Card Number" oninput= "validateCardNumberInput()"/>
          <span class="error" id = "card_number_error">*Card Number is required </span>
          <br />

          <label for="exp_date">Expiration Date</label><br />
          <input type="text" id="exp_date" name="exp_date" placeholder ="MMDD" oninput= "validateExpDate()"/>
          <span class="error" id = "exp_date_error">*Expiration date is required </span>
          <br />

          <label for="card_code">Enter 3 or 4 digit Card Code</label><br />
          <input type="text" id="card_code" name="card_code" placeholder ="000" oninput= "validateCardCode()"/>
          <span class="error" id = "card_code_error">*Card code is required </span>
          <br />

          <label for="zip_code">Cardholder's Zip Code</label><br />
          <input type="text" id="zip_code" name="zip_code" placeholder ="12345" oninput= "validateZipCode()"/>
          <span class="error" id = "zip_code_error">*Zip code is required </span>
          <br />
          <input type="submit" class = "button button-primary" value="Pay My Fees!!" />


</form>


</body>
   
	<!--script for footer-->
	<script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
</body>
</html>
