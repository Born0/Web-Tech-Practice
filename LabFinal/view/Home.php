<!DOCTYPE html>

<head>
  <?php
  session_start();
  //include('../control/Home_Control.php');

  ?>

  <script>
    function searchA() {
      var search = document.getElementById("search").value;
      var type = document.querySelector('input[name = "type"]:checked');
      if (type == null) {
        alert("select type");
      } else {
        type = type.value;
        if (type == "id") {
          var numbers = /^[0-9]+$/;
          if (search.match(numbers)) {} else {
            alert("Enter Number Only!");
          }
        } else if (type == "name") {
          var letters = /^[A-Za-z ]+$/;
          if (search.match(letters)) {} else {
            alert("Character only!");
          }

        } else if (type == "Phone") {
          var numbers = /^[0-9]+$/;
          if (search.length > 8) {
            if (search.match(numbers)) {} else {
              alert("Enter Number Only!");
            }
          } else {
            alert("Number should be more than 8 digit!");;
          }

        } else if (type == "Email") {
          var em = ValidateEmail(search);
          if (em) {} else {
            alert("Invalid Email!");
          }
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mytext").innerHTML = this.responseText;
          } else {
            document.getElementById("mytext").innerHTML = this.status;
          }
        };
        xhttp.open("POST", "/MyCode/LabFinal/control/Home_Control.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("search=" + search + "&type=" + type);

      }



      // var search = document.getElementById("search").value;

    }

    function ValidateEmail(mail) {
      if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail)) {
        return (true)
      }
      alert("You have entered an invalid email address!")
      return (false)
    }
  </script>
</head>

<body>


  <form method="POST">
    <label for="">Enter Id to Search</label><br>
    <input type="text" id="search" name="search"> <br>

    <input type="radio" name="type" value="id"> id
    <input type="radio" name="type" value="name"> name
    <input type="radio" name="type" value="Phone"> Phone
    <input type="radio" name="type" value="Email"> Email

    <input type="button" name="submit" id="searchbtn" onclick="searchA()" value="Search">
    <p id="mytext"></p>
  </form>
</body>

</html>