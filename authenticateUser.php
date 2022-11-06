<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<?php
session_start();
// Change this to your connection info.
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "library";
// Try and connect using the info above.
$con = mysqli_connect($servername, $username, $password, $database);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT * FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $userName = $_POST['username'];
	$stmt->bind_param('s', $username);
	$stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        if (! empty($row)) {
            $hashedPassword = $row["password"];
            if (password_verify($_POST["password"], $hashedPassword)) {
                $isSuccess = 1;
            }
        }
    }
    if ($isSuccess == 0) {
        $message = "Invalid Username or Password!";
    } else {
        header("Location: profilepage.php");
    }
}

?>






	// Store the result so we can check if the account exists in the database.




	//$stmt->store_result();

  // if ($stmt->num_rows > 0) {
   //     $stmt->bind_result($id, $password);
   //     $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
   //     if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
   //         session_regenerate_id();
   //         $_SESSION['loggedin'] = TRUE;
   //         $_SESSION['username'] = $_POST['username'];
   //         $_SESSION['user_id'] = $id;
    //        header('Location: libraryhome.php');
    //    } else {
     //       // Incorrect password
    //        echo 'Incorrect password';
    //        echo '<p>Click here to try again:</p>';
    //        echo '<a href = "signin.php"> Back to sign in </a>';
    //    }
   // } else {
        // Incorrect username
  //      echo 'Incorrect username';
  //      echo '<p>Click here to try again:</p>';
   //     echo '<a href = "signin.php"> Back to sign in </a>';
  //  } 
} 