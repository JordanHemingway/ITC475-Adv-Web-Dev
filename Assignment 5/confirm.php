
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
            <a href="contact_agent.html">Contact Agent</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    <style>
      .error {color:#FF0000;}
    </style>



    
    <h1>Thank You!</h1>
    
    <p>Thank you for submitting your travel agent contact request! Here is the information you submitted:</p>
  <div id="results">
    
    <ol>
        <li><em>First Name:</em> <b><?php echo $_POST["firstName"]?></b></li> 
        <br>
        <li><em>Last Name:</em> <b><?php echo $_POST["lastName"]?></b></li>
        <br>
        <li><em>Email:</em> <b><?php echo $_POST["emailAddress"]?></b></li>
        <br>
        <li><em>Phone:</em> <b><?php echo $_POST["phoneNumber"]?></b></li>
        <br>
        <li><em>Date:</em> <b><?php echo $_POST["tripDate"]?></b></li>
        <br>
        <li><em>Number of Adults:</em> <b><?php echo $_POST["numberOfAdults"]?></b></li>
        <br>
        <li><em>Number of Children:</em> <b><?php echo $_POST["numberOfChildren"]?></b></li>
        <br>
        <li><em>Destination:</em> <b><?php echo $_POST["destination"]?></b></li>
    </ol>
  </div>
    <footer>
            <p>Copytright Protected All Rights Reserved</p>
            <p>MEGA TRAVELS</p>
            <p>mega@travels.com</p>
        </footer>
        
      </body>
    </head>
</html>