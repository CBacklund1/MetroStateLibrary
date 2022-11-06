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
    <div class="heading">
    </br>
        <h1> Thank you for applying! </h1>
		<h2> Your Account is Created</h2>
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
// connection
$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "New Account under Review";

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$userpassword = $_REQUEST['password'];
$address = $_REQUEST['address'];

$hash = password_hash($userpassword, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, first_name, last_name, email, address) VALUES ('$username', '$hash', '$first_name', '$last_name', '$email', '$address')";

if (mysqli_query($db, $sql)) {
    echo "<h3>Please contact us if the information below is inaccurate";
    echo nl2br("\n$first_name $last_name\n $username\n $email\n $address");

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
