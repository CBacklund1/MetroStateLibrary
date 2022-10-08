<?php

// User input Variables
$bookname = $_REQUEST['bookname'];

$document_root = $_SERVER['DOCUMENT_ROOT'];
?>
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <!--Insert Page Name-->
        <title>Contact Us</title>
</head>

<body>
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

echo 'These are the results found from your search:' . $_POST['bookname'] .'<br />';
echo '<table id = "resultTable" style = "display: block;">
<tr>
  <th>Book:</th>
  <th>Author:</th>
  <th>Genre:</th>
</tr>
<tr>
  <td>Attack of the Jellyfish</td>
  <td>Nick Sean</td>
  <td>Fiction</td>
</tr>
<tr>
  <td>Guide to Circuitry</td>
  <td>Jean Robotson</td>
  <td>Non-fiction</td>
</tr>
<tr>
  <td>Guide to Space-ology</td>
  <td>Matthew Goodbin</td>
  <td>Sci-fi</td>
</tr>
<tr>
  <td>It came from the sky</td>
  <td>Miranda Scare</td>
  <td>horror</td>
</tr>
<tr>
  <td>History of the printer</td>
  <td>James Bames</td>
  <td>History</td>
</tr>
<tr>
  <td>Great Outdoors</td>
  <td>Charles Bear</td>
  <td>Nature</td>
</tr>
</table>';

echo ' <br />';

?> 
	
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