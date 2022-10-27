

<?php

/*
echo '[
    {"name":"Armory", "year": "1896"},
    {"name":"Pillsbury Hall", "year": "1889"},
    {"name":"Folwell Hall", "year": "1907"},
    {"name":"Jones Hall", "year": "1901"},
    {"name":"Pillsbury Statue", "year": "1900"},
    {"name":"Wesbrook Hall", "year": "1898"},
    {"name":"Nicholson Hall", "year": "1890"},
    {"name":"Eddy Hall", "year": "1886"},
    {"name":"Music Education", "year": "1888"},
    {"name":"Wulling Hall", "year": "1892"}
]';
*/


$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "library";
$count = 0;
$bookname = $_REQUEST['bookname'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `books` WHERE name LIKE '%$bookname%'";
/*$sql = "SELECT book_id, `name`, author_name, course, number_of_copies FROM books";*/
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  $count = $result->num_rows;
  echo "[";
  while($row = $result->fetch_assoc()) {
    echo "{";
    echo '"id": "' . $row["book_id"]. '" , "bookname": "' . $row["name"]. '" , "authorname": "' . $row["author_name"]. '" , "course": "' . $row["course"].'" , "number_of_copies": "' . $row["number_of_copies"]. '"';
    echo "}";
    if($count != 1){       
        echo ",";
        $count = $count - 1;
    }
  }
  echo "]";
} else {
  echo "[]";
}


$conn->close();

?>

