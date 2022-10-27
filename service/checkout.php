
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


if ($result->num_rows > 0) {
    $insertSql = "INSERT INTO users_books(users_books, user_id, book_id, return_date) VALUES(1, '$loggedInId', '$bookid', '2022-11-26')";
    $insertResult = $conn->query($insertSql);
    
  // output data of each row
 

    echo "{";
    echo '"status" : "true"';
    //echo '"result" : '$insertResult'';
    echo "}";
    
} else {
  echo "{";
  echo '"status" : "false"';
  echo "}";
}


$conn->close();

?>

