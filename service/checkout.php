
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

$bookid = $_REQUEST['bookid'];
//$bookid = 2;
$loggedInId = $_REQUEST['loggedInId'];
//$loggedInId = 1;

$sql = "SELECT * FROM `books` WHERE book_id = '$bookid'";
$result = $conn->query($sql);

$currentDate = date('Y-m-d');
if ($result->num_rows > 0) {
  if(($loggedInId != null || $loggedInId != "") 
    && ($bookid != 0 || $bookid != "")) {
    $insertSql = "
      INSERT INTO users_books(user_id, book_id, return_date) 
        VALUES('$loggedInId', '$bookid', '$currentDate')";
    $insertResult = $conn->query($insertSql);

  // output data of each row
    echo "{";
    echo '"status" : "true"';
    echo "}";
    }
} else {
  echo "{";
  echo '"status" : "false"';
  echo "}";
}


$conn->close();

?>

