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
    <style>
        table, th, td, tr {
        border: 1px solid black;
        margin: 0 auto;
        padding: 5px;
        font-size: medium;

      }
      tr{
        padding:5px;
      }
      .nav>li {
        text-align:center;
        font-size:medium;
    }
    </style>
    </head>
    <body>
    <div class ="container">
        <div class="jumbotron">
            <h1>Thank you for playing <b>BREAKOUT</b></h1>
        </div>

    </div>

    <div class="container">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Play again</a>
            </li>
          </ul>

        </div>

        <h3>Leaderboard</h3>

    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "leaderboard";
    
    $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    
$sql = "SELECT * FROM highScores ORDER BY score DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>ID</th><th>Username</th><th>Score</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td> " . $row["score"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}


    ?>

    </body>
    
</html>