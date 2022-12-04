<?php

// User input Variables
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
setcookie("user", $username);
setcookie("password", $password);


$document_root = $_SERVER['DOCUMENT_ROOT'];
?>
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <!--Insert Page Name-->
        <title>Contact Us</title>
</head>

<body onload = 'validateUser()'>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>
    <!--Insert Page Heading-->
    
	<div class="heading">
    <br/><br/>
        <h1>MetroState Library</h1>
    </div>
    <br></br>
    <!--Insert Body of Page-->
    <div class="body" >
        
       <?php

/* echo 'You are logged in and welcome ' . $_POST['username'] .'<br />'; */
/* echo 'Logged In Successfully. <br/><br/>'; */

?> 

    <p id="welcomemsg" class = "successMessage"></p>
	
    </div>
</body>

<!--script for footer-->
<script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
<!--End Page-->

</html>
