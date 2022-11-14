
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "library";
$count = 0;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$feedback_id = $_REQUEST['feedback_id'];
$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$feedback = $_REQUEST['feedback'];
$date_sent = $_REQUEST['date_sent'];

//$email = "test@gmail.com";
//$name = "Charan";
//$feedback = "test";
//$date_sent = '2022-11-13';

$insertSql = "INSERT INTO feedback(email, name, feedback, date_sent)  VALUES('$email', '$name', '$feedback', '$date_sent')";
        
$insertResult = $conn->query($insertSql);

echo "{";
  echo '"status" : "true"';
  echo "}";
  





$conn->close();

?>

