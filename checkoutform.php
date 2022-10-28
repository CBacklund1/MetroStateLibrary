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
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <title>Contact Us</title>
    <style>
    .error {color: #FF0000;}
    </style>
  </head>

  <!--script for header-->
  <script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>


<br></br>
<body>
    <!--Insert Page Heading-->
    <div class="heading">
      <h1>Checkout Book</h1>
  </div>
    <div class="contact_container">
      <form action= "checkoutsubmit.php" method="POST">
      <label for="bookid">bookid:</label>
      <input id="bookid" name="bookid" rows="1" cols="50" oninput= 'validateBookIdInput()'> </input>
      <span class="error" id = "bookIdError">*Book id is required </span>
      <br/>
      <!--
      <label for="bookname">book name:</label>
      <input id="bookname" name="bookname" rows="1" cols="50"> </input>
      -->


<br>
<input type="submit" value="Submit" class="btn btn-primary">
<br>
<br>
      </form>
    </div>
  </body>
  <!--script for footer-->
  <script
    language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
</html>
