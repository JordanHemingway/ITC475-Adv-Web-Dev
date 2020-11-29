<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mega Travel</title>
        <link rel="stylesheet" href="megatravel.css">
        <body>
        <header>
            <img src="mega travel logo.png" alt="Logo">
            <label id="greeting"></label>
            <p id="time"></p>
            <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
            <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin> </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.7.7/babel.min.js">    </script>
            <script type="text/babel" src="components\button.js"></script>
            
  
            <script src="greeting.js"></script>
            <div id="WelcomeBar"></div>
            <script>
                var myDate = new Date();
                var hrs = myDate.getHours();
                var greet;
                var current = new Date();
                var day_night=current.getHours();
                var d = new Date();
    
             //display sun or moon//
                 if (day_night<=12)
                document.write("<img src='day.png'>")
                else
                document.write("<img src='night.png'>")
                
            //Display the current date and time//
                document.getElementById("time").innerHTML = d;
    
            //display a greeting message//
                if (hrs < 12)
                  greet = 'Good Morning';
                else if (hrs >= 12 && hrs <= 17)
                  greet = 'Good Afternoon';
                 else if (hrs >= 17 && hrs <= 24)
                 greet = 'Good Evening';
                document.getElementById('greeting').innerHTML =
            '<b>' + greet + '</b>' + ' the current date and time is ';
                
              </script>
        </header>
        <hr class="solid">
        <div class="topnav" id="myTopnav">
        <a href="mega_travel_site.html" >Home</a>
            <a href="about_us.html"class="active">About Us</a>
            <a href="contactform.html">Contact Agent</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    <style>
      .error {color:#FF0000;}
      div#Admin{
        margin-left:200px;
        margin-right:1500px;
        border: 1px solid black;
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 15px;
        background-color: #F6AF24;
        text-align: center;
      }
      
    </style>
    
<div id="Admin">
    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "formdb";
    
    $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);

    $query = "SELECT * FROM form_table";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<b>id: </b>" ."<b>".$row["id"]."</b>"." <b>- Name: </b>" . "<b>".$row["firstName"]. " " . $row["lastName"]."</b>". "<br><br>"."Email: ".
        $row["emailAddress"]. "<br><br>"."Phone Number: ". $row["phoneNumber"]. "<br><br>"."Trip Date: ". $row["tripDate"]."<br><br>". "Number of adults: ". $row["numberOfAdults"]. "<br><br>"."Number of Children: "
        . $row["numberOfChildren"]. "<br><br>"."Destination ". $row["destination"]."<br><br><br><br>". " ";
      }
    } else {
      echo "0 results";
    }

    ?>
</div>
     <footer>
            <p>Copytright Protected All Rights Reserved</p>
            <p>MEGA TRAVELS</p>
            <p>mega@travels.com</p>
        </footer>
        
      </body>
    </head>
</html>