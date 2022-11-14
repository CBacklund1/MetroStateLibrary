<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<?php
// User input Variables
$fullName = $_POST['fullname'];
$email = $_POST['email'];
$question = $_POST['question'];
$date = date('H:i, jS F Y');
$document_root = $_SERVER['DOCUMENT_ROOT'];

setcookie("fullname", $fullName);
setcookie("email", $email);
setcookie("question", $question);
setcookie("date", $date);

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

<body onload = "saveFeedback()">
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
        <p class="successMessage">  
        <?php
            echo $_POST['fullname'] . " " . $_POST['email'] . " " . $_POST['question'] . '<br />';
            echo $_POST['fullname'] . ' has submitted a question.<br /><br/>';
        ?> 
        </p>

<?php
$outputstring = $date . "\t" . $FullName . " \t" . $Email . " \t "
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
<!--script for footer-->
<script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
<!--End Page-->

</html>
