<?php
session_start();
?>

<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel=stylesheet href="../Resources/bootstrap/css/bootstrap.min.css">
      <script src="../Resources/jquery/jquery-3.7.1.min.js"></script>
      <script src="../Resources/bootstrap/js/bootstrap.bundle.min.js"></script>
      <?php
          include "../php/functions.php";
      ?>
  </head>

  <body>
    <?php include "navBar.html.php"; ?>
    <div class='container-fluid m-3'>
    <a href='upcomingPerformanceHome.html.php'> &larr; Back to all upcoming performances</a>
    </div>
    <div class='container-fluid m-3'>
    <div class="row">
    
    <?php

      $file = $_GET["a"];
      $filePath = "../json/upcoming/" . $file;
      $arr = fileToArray($filePath);
      echo "<div class='col-md-4'>";
      echo "<h1>". $arr["title"] . "</h1>";
      echo "<p>". $arr["time"] .", " .$arr["date"] . "</p>";
      echo "<p>". $arr["location"] . "</p>";
      echo "<img src='". "../Resources/Images/". $arr["image"] ."' class='img-fluid'>";
      echo "</div>";
      echo "<div class='col-md-8'>";
      echo "<p>". $arr["description"] . "</p>";
      echo "</div>";
    ?>
    </div>
    </div>
  </body>
</html>