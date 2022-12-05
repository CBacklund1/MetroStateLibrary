function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function loadBookTable() {
  var bookName = getCookie("bookname");
  console.log("bookName: " + bookName);

  var xhttp = new XMLHttpRequest(); //Ajax object to call service.

  var url = "http://localhost/groupproject/metrostatelibrary/service/getBooks.php";
  url = url + "?bookname=" + bookName;

  xhttp.open("GET", url, true);
  xhttp.send();

  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      myJSON = this.responseText;
      console.log(myJSON);
      
      const myObj = JSON.parse(myJSON);

      if(myObj.length != 0) {
        text = "<table id='search-results-table-id' class='search-results-table' onclick='getSelectedBook();getSelectedBookToDelete();'>"
        text += 
          "<tr> "+
          "   <th style='width:5%; text-align:center;'>Select</th> "+
          "   <th>Book Id</th> "+
          "   <th>Book Name</th> "+
          "   <th>Author</th> "+
          "   <th>Course</th> "+
          "</tr> ";

        for (x in myObj) {
          text += 
            "<tr>" +
            "   <td><input type='checkbox'/></td>" + 
            "   <td>" + myObj[x].id + "</td>" +
            "   <td>" + myObj[x].bookname + "</td>" +
            "   <td>" + myObj[x].authorname + "</td>" +
            "   <td>" + myObj[x].course + "</td>" +
            "</tr>";
        }
        
        text += 
          "</table>"+
          "<div><form action='checkoutsubmit.php' method='POST'>"+
          "   <input id='checkoutId' class='checkout-btn' type='submit' value='Check Out' />"+
          "</form></div>";
      }
      else {
        text = "<h1>No Results Found</h1>";
      }

      document.getElementById("booksTable").innerHTML = text;  
    }
  };
  init();
}

function validateUser() {
  

  var user = getCookie("user");
  var password = getCookie("password");
  

  console.log("cookie: " + document.cookie);
  console.log("user:" + user);
  console.log("password:" + password);

  var xhttp = new XMLHttpRequest(); //Ajax object to call service.
  var text = "Arun";
  var url = "http://localhost/groupproject/metrostatelibrary/service/getUser.php";
  url = url + "?user=" + user + "&" + "password=" + password;

  xhttp.open("GET",url , true); 
  xhttp.send();

  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      myJSON = this.responseText;
      console.log(myJSON);
      
        const myObj = JSON.parse(myJSON);
        console.log(myObj);
        
        if(myObj.status == "true"){
          text = "<div class='successLoggedInMsg'><p>Logged in Successfully!</p><br><p>Welcome " + user +"!</p></div>";
          document.cookie = "loggedInId=1; path=/";
		  
		  if(user == 'admin' || user == 'ADMIN'){
			  //var admin = "<li class='nav'><a href='admin.php'>Manage Book(s)</a></li>";		  
			  //document.getElementById("navbar-section").innerHTML += admin;
        document.getElementById("manage_book").style = "display:inline"
		  }
		  
		  var logout = "Logout";
		  document.getElementById("signinId").value = logout;
		  
		  var welcomeUser = "Welcome "+user+"!";
		  document.getElementById("login-icon").innerHTML += welcomeUser;
        }
        else{
          text = "<div class='failedLoggedInMsg'><p>Sorry we couldn't find you in our system.</p></div>";
        }
		
		document.getElementById("welcomemsg").innerHTML = text;
		
    }
  };
}

function checkoutBook() {
  const selectedBooks = getCookie("selectedBooks");
  const checkedoutBooks = getCookie("checkedoutBooks");
  var loggedInId = getCookie("loggedInId");

  var xhttp = new XMLHttpRequest(); //Ajax object to call service.
  var text = "Arun";
  var text2 = "<h1 style='text-align: center; margin-top:20px;'>Please remember to return the book(s) within 90 days. Otherwise a late fee of $5 will be charged.</h1>";
  var tableCheckout = "";

  var url = "";
  const checkoutBooks = selectedBooks.split(",");
  for(let i=0; i < checkoutBooks.length; i++) {
    url = checkoutBooks[i];
    console.log(url);

    xhttp.open("GET", url, true); 
    xhttp.send();
    console.log("send "+i);
  }

  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      myJSON = this.responseText;
      console.log(myJSON);
      
      const myObj = JSON.parse(myJSON);
      console.log(myObj);
      
      const checkedout = checkedoutBooks.split(",");

      if(myObj.status == "true"){
          text = "<div class='checkout-header'>"+
            "<i class='icon-check'></i>"+
            "<h3 class='checkout-submission-header'>Successfully Checkout</h3>"+
            "</div>"+
            "<br><br><br>"+
			"<h3>You have "+checkedout.length+" checked out book(s): </h3>";
            //+ "<br><br>Please go to the counter to pickup your book(s).";

            tableCheckout = "<table class='checkout-results-table'>"
            tableCheckout += 
              "<tr> "+
              "   <th>Please go to the counter to pickup your book(s) </th> "+
              // "   <th>Book Id</th> "+
              // "   <th>Book Name</th> "+
              // "   <th>Author</th> "+
              // "   <th>Course</th> "+
              "</tr> ";

              for (let i=0; i < checkedout.length; i++) {
                tableCheckout += 
                  "<tr>" +
                  "   <td>" + checkedout[i] + "</td>" +
                  "</tr>";
              }
            
            tableCheckout += 
              "</table>";
      }
      else{
          text = "<div class='checkout-header'>"+
          "<i class='icon-error'></i>"+
          "<h3 class='checkout-submission-error-header'>Error Checking out</h3>"+
          "</div>"+
          "<br><br><br>"+
          "Sorry we couldn't checkout your book(s). Please contact the help center.";
      }
      
      document.getElementById("checkoutmsg").innerHTML = text;
      document.getElementById("checkoutmsg").innerHTML += tableCheckout;
	  document.getElementById("checkoutmsg").innerHTML += text2;
    }
  };
  init();
}

function validateUserInput(){
  text = document.getElementById("username").value;
  
  if(text == ""){
    console.log("username required");
    document.getElementById("usernameError").style = "display:inline";
  }
  else{
      console.log("username entered");
      document.getElementById("usernameError").style = "display:none";
  }
}

function validatePasswordInput(){
  text = document.getElementById("password").value;
  
  if(text == ""){
    console.log("password required");
    document.getElementById("passwordError").style = "display:inline";
  }
  else{
      console.log("password entered");
      document.getElementById("passwordError").style = "display:none";
  }
}

function validateBookIdInput(){
  text = document.getElementById("bookid").value;
  
  if(text == ""){
    console.log("bookid required");
    document.getElementById("bookIdError").style = "display:inline";
  }
  else{
      console.log("bookid entered");
      document.getElementById("bookIdError").style = "display:none";
  }
}

function validateSearchInput(){
  text = document.getElementById("bookname").value;
  
  if(text == ""){
    console.log("bookname required");
    document.getElementById("bookNameError").style = "display:inline";
  }
  else{
      console.log("bookname entered");
      document.getElementById("bookNameError").style = "display:none";
  }
}

function getSelectedBook() {
  const currentSelected = new Array();
  const checkedoutBooks = new Array();
  var row;
  var loggedInId = "21";

  $(".search-results-table input[type=checkbox]:checked").each(function() {
    row = $(this).closest("tr")[0];
    currentSelected.push("http://localhost/groupproject/metrostatelibrary/service/checkout.php"+
      "?bookid=" + row.cells[1].innerHTML + "&" + "loggedInId=" + loggedInId);

    checkedoutBooks.push("Book Id: "+row.cells[1].innerHTML
      +"\nBook Name: "+row.cells[2].innerHTML
      +"\nAuthor: "+row.cells[3].innerHTML
      +"\nCourse Name: "+row.cells[4].innerHTML)
  });

  $(".checkout-btn").click(function() {
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'selectedBookLists';
    input.value = currentSelected;
    document.getElementById('searchResultForm').appendChild(input);

    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'checkedoutBooks';
    input.value = [checkedoutBooks];
    document.getElementById('searchResultForm').appendChild(input);
  });
  console.log(currentSelected);
}


function saveFeedback(){
  
  console.log("saveFeedBack() Function called.");

  var email = getCookie("email");
  var name = getCookie("fullname");
  var feedback = getCookie("question");
  var date_sent = getCookie("date");
  //var date_sent = new Date().toDateString();

  //var email = "123@gmail.com";
  //var name = "Arun";
  //var feedback = "test";
  var date_now = new Date();
  var date_sent = date_now.getFullYear() + "-" + date_now.getMonth() + "-" + date_now.getDate();
  

    var xhttp = new XMLHttpRequest(); //Ajax object to call service.

    var url = "http://localhost/groupproject/metrostatelibrary/service/feedback.php";
    url = url + "?email=" + email + "&" + "name=" + name + "&" + "feedback=" + feedback + "&" + "date_sent=" + date_sent;
    console.log(url);

    xhttp.open("GET",url , true); 
    xhttp.send();

    init();
  }

  function validateNameInput(){
    text = document.getElementById("name").value;
    
    if(text == ""){
      console.log("name required");
      document.getElementById("nameError").style = "display:inline";
    }
    else{
        console.log("name entered");
        document.getElementById("nameError").style = "display:none";
    }
  }

function validateEmail(emailId) {
  var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if (emailId.value.match(mailformat)) {
    //document.form1.text1.focus();
    return true;
  }
  else {
    console.log("Invalid email address.");
    //document.form1.text1.focus();
    return false;
  }
}    

  function validateEmailInput(){
    text = document.getElementById("email").value;
    
    if(text == ""){
      console.log("email required");
      document.getElementById("emailError").style = "display:inline";
      document.getElementById("emailFormatError").style = "display:none";
    }
    else{
        console.log("email entered");
        document.getElementById("emailError").style = "display:none";
        var isValid = validateEmail(document.getElementById("email"));
        if(isValid){
          document.getElementById("emailFormatError").style = "display:none";
        }
        else{
          document.getElementById("emailFormatError").style = "display:inline";
        }
    }
  }

  function validateFeedbackInput(){
    text = document.getElementById("feedback").value;
    
    if(text == ""){
      console.log("feedback required");
      document.getElementById("feedbackError").style = "display:inline";
    }
    else{
        console.log("feedback entered");
        document.getElementById("feedbackError").style = "display:none";
    }
  }

  function validateUserIdInput(){
    text = document.getElementById("user_id").value;
    
    if(text == ""){
      console.log("User Id required");
      document.getElementById("user_id_error").style = "display:inline";
    }
    else{
        console.log("User Id name entered");
        document.getElementById("user_id_error").style = "display:none";
    }
  }

  function validateCardHolderNameInput(){
    text = document.getElementById("cardholder_name").value;
    
    if(text == ""){
      console.log("Card holder name required");
      document.getElementById("cardholder_name_error").style = "display:inline";
    }
    else{
        console.log("Card holder name entered");
        document.getElementById("cardholder_name_error").style = "display:none";
    }
  }

  function validateCardNumberInput(){
    text = document.getElementById("card_number").value;
    
    if(text == ""){
      console.log("Card number required");
      document.getElementById("card_number_error").style = "display:inline";
    }
    else{
        console.log("Card number entered");
        document.getElementById("card_number_error").style = "display:none";
    }
  }

  function validateExpDate(){
    text = document.getElementById("exp_date").value;
    
    if(text == ""){
      console.log("exp_date required");
      document.getElementById("exp_date_error").style = "display:inline";
    }
    else{
        console.log("exp_date entered");
        document.getElementById("exp_date_error").style = "display:none";
    }
  }

  function validateCardCode(){
    text = document.getElementById("card_code").value;
    
    if(text == ""){
      console.log("card_code required");
      document.getElementById("card_code_error").style = "display:inline";
    }
    else{
        console.log("card_code entered");
        document.getElementById("card_code_error").style = "display:none";
    }
  }

  function validateZipCode(){
    text = document.getElementById("zip_code").value;
    
    if(text == ""){
      console.log("zip_code required");
      document.getElementById("zip_code_error").style = "display:inline";
    }
    else{
        console.log("zip_code entered");
        document.getElementById("zip_code_error").style = "display:none";
    }
  }
  
  
  
  function adminManage() {
	  //var admin = "<li class='nav'><a href='admin.php'>Manage Book(s)</a></li>";		  
	  //document.getElementById("navbar-section").innerHTML += admin;
	  
	  //var logout = "Logout";
	  //document.getElementById("signinId").value = logout;
	  
	  //var welcomeUser = "Welcome Admin!";
	  //document.getElementById("login-icon").innerHTML += welcomeUser;
	  
	  loadBookTable();
	  
  }
  
  function adminManageAdd() {
	  //var admin = "<li class='nav'><a href='admin.php'>Manage Book(s)</a></li>";		  
	  //document.getElementById("navbar-section").innerHTML += admin;
	  
	  //var logout = "Logout";
	  //document.getElementById("signinId").value = logout;
	  
	  //var welcomeUser = "Welcome Admin!";
	  //document.getElementById("login-icon").innerHTML += welcomeUser;
	  
	  loadBookTable();
  }
  
  function getSelectedBookToDelete() {
  const selected = new Array();

  $(".search-results-table input[type=checkbox]:checked").each(function() {
    var currentRow = $(this).closest("tr")[0];
	
    selected.push("http://localhost/groupproject/metrostatelibrary/service/deleteBook.php"+
      "?bookid=" + currentRow.cells[1].innerHTML);
  });

	$("#admin-delete-btn").click(function() {
	var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'selectedBookIdLists';
    input.value = [selected];
    document.getElementById('deleteSubmitForm').appendChild(input);
  });
}
  
  function adminManageDelete() {
	//var admin = "<li class='nav'><a href='admin.php'>Manage Book(s)</a></li>";		  
	//document.getElementById("navbar-section").innerHTML += admin;

	//var logout = "Logout";
	//document.getElementById("signinId").value = logout;

	//var welcomeUser = "Welcome Admin!";
	//document.getElementById("login-icon").innerHTML += welcomeUser;

	const selectedBookIdLists = getCookie("selectedBookIdLists");
	var xhttp = new XMLHttpRequest(); //Ajax object to call service.

	const books = selectedBookIdLists.split(",");

	var url = "";
	for (let i = 0; i < books.length; i++) {
		console.log("i: "+books[i]);
		
		url = books[i];
		xhttp.open("GET", url, true);
		xhttp.send();
	}

	loadBookTable();
  }

  function init() {
    //initialize the menu bar
    var user = getCookie("user"); 
    if(user == 'admin' || user == 'ADMIN'){
      document.getElementById("manage_book").style = "display:inline"
    }
    else {
      document.getElementById("manage_book").style = "display:none"
    }
  
    //set the sign in sign out button
    var loggedInId = getCookie("loggedInId");
    if(loggedInId != '""'){
      //set welcome user
      var logout = "Logout";
		  document.getElementById("signinId").value = logout;
		  
		  var welcomeUser = "Welcome "+user+"!";
		  document.getElementById("login-icon").innerHTML += welcomeUser;
    }
    else{
      //show sign in button
      var signIn = "Signin";
		  document.getElementById("signinId").value = signIn;
		  
		  var welcomeUser = "";
		  document.getElementById("login-icon").innerHTML += welcomeUser;
    }
  } 

  function signOutUser(){
    document.cookie = 'loggedInId= ""; path=/';
    document.cookie = 'user= ""';
    document.cookie = 'password= ""';

    var signIn = "Signin";
		document.getElementById("signinId").value = signIn;
		  
		var welcomeUser = "";
		document.getElementById("login-icon").innerHTML = welcomeUser;
    //document.getElementById("welcomemsg").innerHTML = welcomeUser;
  }