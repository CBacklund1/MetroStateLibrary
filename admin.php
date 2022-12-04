<?php
    // User input Variables
    //$user = $_REQUEST['user'];
    //setcookie("user", $user);
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
        <title>Manage Book(s)</title>
    </head>

    <body onload = 'adminManage()'>
        <!--Insert Page Heading-->
        <div class="heading">
            <br/><br/>
            <h1>MetroState Library</h1>
        </div>
        
        <br></br>

        <!--Insert Body of Page-->
        <div class="body">
			<div class="admin-btns-style">
				Manage Book(s)
				<form action= "addSubmit.php" method="POST">
					<div class="add-new-style">
						<h3>Add New Book</h3>
						<br>
						<label for="name">Book name:&nbsp;&nbsp;&nbsp;</label>
						<input id="name" name="name" rows="1" cols="50" placeholder="Book Name"></input>
						
						<label for="author_name">Author:&nbsp;&nbsp;&nbsp;</label>
						<input id="author_name" name="author_name" rows="1" cols="50" placeholder="Author"></input>
						
						<label for="course">Course:&nbsp;&nbsp;&nbsp;</label>
						<input id="course" name="course" rows="1" cols="50" placeholder="Course"></input>
						
						<input id="admin-add-btn" class="admin-btn-style" type="submit" value="Add">
					</div>
				</form>
				<form id="deleteSubmitForm" action= "deleteSubmit.php" method="POST">
					<input id="admin-delete-btn" class="admin-btn-style" type="submit" value="Delete">
					
					<input id="book_id" name="book_id" rows="1" cols="50" hidden></input>
				</form>
			</div>
			
			<div>
				<p id="booksTable"></p>
			</div>
        </div>
    </body>
	
    <br><br><br>
    <!--script for footer-->
    <script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
    <!--End Page-->
</html>
