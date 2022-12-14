<!-- ICS 499-50 Fall 2022
MetroState Library 
Group 4 Authors: Crystal Backlund, Arun Markandu, 
Pao Teng Thao, Xiong Yang -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>
    <style>
      .error {color: #FF0000;}
    </style>
    <!--Insert Page Name-->
    <title>Checkout</title>
  </head>

  <body onload = "init()">
    <!--Insert Page Heading-->
    <div class="heading">
      <br/><br/>
      <h1>Checkout Book</h1>
    </div>

    <br></br>
    
    <div class="contact_container">
      <form action= "checkoutsubmit.php" method="POST">
        <label for="bookid">bookid: </label>
        <input id="bookid" name="bookid" rows="1" cols="50" oninput= 'validateBookIdInput()'> </input>
        <span class="error" id = "bookIdError">*Book id is required </span>
        <br/>
        <!--
        <label for="bookname">book name:</label>
        <input id="bookname" name="bookname" rows="1" cols="50"> </input>
        -->
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  </body>

  <br><br><br>
  <!--script for footer-->
  <script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
  <!--End Page-->
</html>
