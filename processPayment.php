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
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <title>Process Payment</title>
  </head>
   
<!--script for header-->
<script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>

<br></br>
<body onload = "init()">
    
    <!--Insert Page Heading-->
    <div class="heading">
    </br>
        <h1> Thank you for paying your fees! </h1>
		<h2> Your payment is Created</h2>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "library";

// connections
$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Payment Applied";

$user_id = $_REQUEST['user_id'];
$cardholder_name = $_REQUEST['cardhold_name'];
$card_number = $_REQUEST['card_number'];
$exp_date = $_REQUEST['exp_date'];
$card_code = $_REQUEST['card_code'];
$zip_code = $_REQUEST['zip_code'];


$sql = "INSERT INTO payment (user_id, cardholder_name, card_number, exp_date, card_code, zip_code) VALUES ('$user_id', '$cardholder_name', '$card_number', '$exp_date', '$card_code', '$zip_code')";

if (mysqli_query($db, $sql)) {
    echo "<h3>Please contact us if the information below is inaccurate";
    echo nl2br("\n$cardholder_name $card_number\n $exp_date\n $card_code\n $zip_code");

}
else {
    echo "ERROR: $sql. " . mysqli_error($db);
}
mysqli_close($db);
?>
</div>
<form method="POST" action="contactform.html">
			<input type = "submit" value = "Contact Us"/>
		</form>

</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="footer.txt"></script>
<!--End Page-->

</html>
