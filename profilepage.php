<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<?php
session_start();

if(isset($_SESSION['loggedin'])){
	echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign Out" />';
}
if(!isset($_SESSION['loggedin'])){
	header('Location: signin.php');
  echo '<form method="POST" action="signout.php"><input class="headerSignOut" type="submit" Value="Sign In" />';
	//exit;
}
//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  //echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
//} else {
  //echo "Please log in first to see this page.";
//}

// User input Variables
//$username = $_REQUEST['username'];
//$password = $_REQUEST['password'];
//setcookie("user", $username);
//setcookie("password", $password);

//$document_root = $_SERVER['DOCUMENT_ROOT'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <!--Insert Page Name-->
    <title>Account Page</title>
</head>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>
    <br></br>
  <body onload = 'validateUser()'>
  <div class="heading">
  <h1>Welcome back!</h1> <br>
 
    </div>
    <br></br>
    
    <div class = "container">
      <!--Left side of screen-->
        <div class = "left_container">
          <img src="user.jpg" alt="user" width = "500"/>  
          <form method="POST" action="edituserinfo.php">
               <input type = "submit" value = "Edit Your Profile"/>
          </form>
        </div>

      <!--Right side of screen-->
        <div class = "right_container">
  
           <h2> Your books are: </h2><br>
              <table>
					      <tr>
                  <?php
                     session_start();
                      $servername = "localhost";
                      $username = "root";
                      $password = "mysql";
                      $database = "library";
                    // connection
                      $db = new mysqli($servername, $username, $password, $database);

                       if ($db->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }

                       $id = $_SESSION['user_id'];

                          $sql = "SELECT book_id FROM users_books WHERE userID = '$id'" ;
                           $books = mysqli_query($db, $sql);

                           if (mysqli_num_rows($users_books) > 0) {
                            // output data of each row
                              while($row = mysqli_fetch_assoc($books)) {
                              $sql2 = "SELECT name FROM books WHERE book_id = '$sql'";
                              echo $row["name"]. "<br/>";
                              }
                          } else {
                             echo "0 results";
                           }
  
                              mysqli_close($db);
                    ?>
                </tr>
	            </table>



</body>
   
	<!--script for footer-->
	<script language="javascript" type="text/javascript" 
  src="LibraryFooter.txt"></script>
	</body>
	</html>