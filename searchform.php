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
    <script language="javascript" type="text/javascript" src="js/lib.js" ></script>
    <!--script for header-->
    <script language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>
    <style>
      .error {color: #FF0000;}
    </style>
    <!--Insert Page Name-->
    <title>Search Books</title>
  </head>

  <body>
    <!--Insert Page Heading-->
    <div class="heading">
      <br/><br/>
      <h1>Search books</h1>
    </div>
    
    <br></br>

    <div class="contact_container">
      <form action= "searchsubmit.php" method="POST">
        <div class="search-section">
          <label for="bookname">Book name:&nbsp;&nbsp;&nbsp;</label>
          <input id="bookname" name="bookname" rows="1" cols="50" oninput='validateSearchInput()' placeholder="Book Name"></input>
          <span class="error" id="bookNameError">*Book name is required </span>
          &nbsp;&nbsp;&nbsp; 
          <input type="submit" class = "button button-primary" value="Submit">
        </div>
      </form>
    </div>
  </body>
  
  <!--script for footer-->
  <script language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
  <!--End Page-->
</html>
