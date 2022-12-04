<?php
    setcookie("bookname", " ");
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
  
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/styles.css" />
        <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
        <!--script for header-->
        <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <!--Insert Page Name-->
        <title>Add Sucessfully</title>
    </head>

    <body onload = 'adminManageAdd()'>
        <!--Insert Page Heading-->
        <div class="heading">
            <br/><br/>
            <h1>MetroState Library</h1>
        </div>
        
        <br></br>

        <!--Insert Body of Page-->
        <div class="body">
			<h1 style="color: green; padding-bottom: 20px;">Add Successfully</h1>
			<div>
				<p id="booksTable"></p>
			</div>
        </div>
		
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
			echo "";

			$name = $_REQUEST['name'];
			$author_name = $_REQUEST['author_name'];
			$course = $_REQUEST['course'];

			
			$sql = "INSERT INTO books (name, author_name, course, number_of_copies) values('$name', '$author_name', '$course', '10') ";

			if (mysqli_query($db, $sql)) {
				echo "";
				echo nl2br("");

			}
			else {
				echo "";
			}
			mysqli_close($db);
			?>
		
		
    </body>
	
    <br><br><br>
    <!--script for footer-->
    <script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
    <!--End Page-->
</html>
