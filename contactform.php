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
    <title>Contact Us</title>
  </head>

  <!--script for header-->
  <script
    language="javascript" type="text/javascript" src="LibraryHeader.txt" ></script>


<br></br>
<body>
    <!--Insert Page Heading-->
    <div class="heading">
      <h1>Contact Us</h1>
  </div>
    <div class="contact_container">
      <form action= "contactSubmit.php" method="POST">
        <label for="fullname">Full Name:</label><br />
        <input type="text" name="fullname" placeholder="Full Name" /><br />
        <label for="email">Email:</label><br />
        <input type="text" name="email" placeholder="Email" /> <br />
        <label for="question">Ask Your Question:</label><br />
        <textarea name="question" rows="5" cols="28"> </textarea><br /><br />
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
  <!--script for footer-->
  <script
    language="javascript" type="text/javascript" src="LibraryFooter.txt"></script>
</html>
