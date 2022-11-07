<?php
    // User input Variables
    // $bookname = $_REQUEST['bookname'];
    // echo $bookname;
    // $bookid = $_REQUEST['bookid'];
    // echo $bookid;
    // $isbn = $_REQUEST['isbn'];
    // echo $isbn;

    // setcookie("bookid", $bookid);
    $selectedBooks = $_REQUEST['selectedBookLists'];
    setcookie("selectedBooks", $selectedBooks);

    $checkedoutBooks = $_REQUEST['checkedoutBooks'];
    setcookie("checkedoutBooks", $checkedoutBooks);
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
  
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
        <link rel="stylesheet" href="css/styles.css" />
        <!--script for header-->
        <script language="javascript" type="text/javascript" src="LibraryHeader.txt"></script>
        <!--Insert Page Name-->
        <title>Checkout Successfully</title>
    </head>

    <body onload = "checkoutBook()">
        <!--Insert Page Heading-->
        <div class="heading">
            <br/><br/>
            <h1>MetroState Library</h1>
        </div>
        
        <br></br>

        <!--Insert Body of Page-->
        <div class="body">
            <p id="checkoutmsg"></p>
        </div>
    </body>

    <br><br><br>
    <!--script for footer-->
    <script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
    <!--End Page-->
</html>
