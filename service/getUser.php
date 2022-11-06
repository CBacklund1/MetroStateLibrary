
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

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];


$sql = "SELECT * FROM `users` WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
 

    echo "{";
    echo '"status" : "true"';
    echo "}";

    
} else {
  echo "{";
  echo '"status" : "false"';
  echo "}";
}


$conn->close();

?>

