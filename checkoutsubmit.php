<?php

// User input Variables
$bookname = $_REQUEST['bookname'];
$bookid = $_REQUEST['bookid'];

$isbn = $_REQUEST['isbn'];
setcookie("bookid", $bookid);



$document_root = $_SERVER['DOCUMENT_ROOT'];
?>
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <!--Insert Page Name-->
        <title>Contact Us</title>
</head>

<body onload = "checkoutBook()">
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

echo 'You have checked out book:' . $_POST['isbn'] .' - id: ' . $_POST['isbn'] .'<br />';
echo 'Please go to the counter to pickup your book.';


?> 

<p id="checkoutmsg"></p>
	
	<?php

$outputstring = $date . "\t" . $fullname . " \t" . $email . " \t "
    . "\t" . $question . "\n";

// open file for appending
$myfile = fopen("questionForm.txt", 'ab') or die("Your request could not be processed at this time.");


flock($myfile, LOCK_EX);
fwrite($myfile, $outputstring, strlen($outputstring));
flock($myfile, LOCK_UN);
fclose($myfile);

echo "<p>Request processed at ";
echo date('H:i, jS F Y');
echo "</p>";
?>
	
	
    </div>
</body>
<br></br>
<!--script for footer-->
<script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
<!--End Page-->

</html>