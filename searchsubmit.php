<?php
    // User input Variables
    $bookname = $_REQUEST['bookname'];
    setcookie("bookname", $bookname);
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
        <title>Search Results</title>
    </head>

    <body onload = 'loadBookTable()'>
        <!--Insert Page Heading-->
        <div class="heading">
            <br/><br/>
            <h1>MetroState Library</h1>
        </div>
        
        <br></br>

        <!--Insert Body of Page-->
        <div class="body">
            <form id="searchResultForm" method="POST" action="checkoutsubmit.php">
            <?php echo 'These are the results found from your search: <b>' . $_POST['bookname'] .'</b><br /><br />'; ?> 
            <p id="booksTable"></p>
            </form>
        </div>
    </body>
    
    <br><br><br>
    <!--script for footer-->
    <script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
    <!--End Page-->
</html>
