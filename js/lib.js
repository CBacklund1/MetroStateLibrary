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
          
          
  
          text = "<table border='1'>"
          text += "<tr> <th>id:</th> <th>book:</th> <th>author:</th> <th>course:</th> <th>number_of_copies:</th> </tr>";
          for (x in myObj) {
            text += "<tr>" +
            "<td>" + myObj[x].id + "</td>" +
            "<td>" + myObj[x].bookname + "</td>" +
            "<td>" + myObj[x].authorname + "</td>" +
            "<td>" + myObj[x].course + "</td>" +
            "<td>" + myObj[x].number_of_copies + "</td>" + 
            "</tr>";
          }
          text += "</table>" 
          console.log(text);
          document.getElementById("booksTable").innerHTML = text;
          
      }
    };
    
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
            text = "welcome from validate user";
            document.cookie = "loggedInId=1; path=/";
            
          }
          else{
            text = "Sorry we couldn't find you in our system";
          }
          document.getElementById("welcomemsg").innerHTML = text;
      }
    };
}

function checkoutBook() {
        var bookid = getCookie("bookid");
        console.log("Book id: " + bookid);

        var loggedInId = getCookie("loggedInId");
        console.log("Logged in id: " + loggedInId);

        var xhttp = new XMLHttpRequest(); //Ajax object to call service.
        var text = "Arun";

        var url = "http://localhost/groupproject/metrostatelibrary/service/checkout.php";
        url = url + "?bookid=" + bookid + "&" + "loggedInId=" + loggedInId;
    
        xhttp.open("GET", url, true); 
        xhttp.send();
    
        xhttp.onreadystatechange=function() {
          if (this.readyState == 4 && this.status == 200) {
            myJSON = this.responseText;
            console.log(myJSON);
            
              const myObj = JSON.parse(myJSON);
              console.log(myObj);
              
              if(myObj.status == "true"){
                text = "successfully checked out book";
              }
              else{
                text = "Sorry we couldn't checkout your book, please contact help center";
              }
              document.getElementById("checkoutmsg").innerHTML = text;
          }
        };

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