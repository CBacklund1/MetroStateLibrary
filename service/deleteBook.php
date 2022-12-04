<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "library";

$bookid = $_REQUEST['bookid'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `books` WHERE book_id = '$bookid'";
$result = $conn->query($sql);

$conn->close();
?>

