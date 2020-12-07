<!DOCTYPE html>
<head>
  <!--Name:Jordan Hemingway
      Class: ITC 475
      Date: December 8th, 2020
      Sources: https://developer.mozilla.org/en-US/docs/Games/Tutorials/2D_Breakout_game_pure_JavaScript
               https://www.w3schools.com/html
               https://www.w3schools.com/sql
               https://www.w3schools.com/php
               -->
    <meta charset="utf-8" />
    <title>Breakout Game</title>
    <a href="index.html"></a>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" 
    integrity="sha384-4ZPLezkTZTsojWFhpdFembdzFudphhoOzIunR1wH6g1WQDzCAiPvDyitaK67mp0+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class ="container">
        <div class="jumbotron">
            <h1>Thank you for playing <b>BREAKOUT</b></h1>
    </div>    
            <div class="container">
            
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="leaderboard.php">Leaderboard</a>
            </li>
          </ul>

        </div>
            
          
<?php

      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "leaderboard";
      $tbl_name = "highscores";
      
      $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $name = $_POST['username'];
      $score = $_POST['score'];
     
     $sql = "INSERT INTO ".$tbl_name."(username, score)
       VALUES ('".$name."', '".$score."')";
       

if ($conn->query($sql) === TRUE) {
  echo "Your username and score were added to the leaderboard";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
 

?>

</body>
</html>