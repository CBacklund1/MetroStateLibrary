<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="first.css">
    <script src="first.js"></script>
</head>

<body>
    <h2>Table With Border</h2>

    <p>Use the CSS border property to add a border to the table.</p>
    
    
    <?php

      


$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT storeId, street, city, `state`, zipCode FROM store";
$result = $conn->query($sql);

echo '<table style="width:100%">
    <tr>
      <th>Store ID</th>
      <th>Street</th> 
      <th>City</th>
      <th>State</th>
      <th>Zip code</th>
    </tr>';

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["storeId"] ."</td>";
    echo "<td>". $row["street"] ."</td>";
    echo "<td>". $row["city"] ."</td>";
    echo "<td>". $row["state"] ."</td>";
    echo "<td>". $row["zipCode"] ."</td>";
    echo "</tr>"
  }
} else {
  echo "0 results";
}


$conn->close();


echo "</table>";


?>
</body>     

</html>
