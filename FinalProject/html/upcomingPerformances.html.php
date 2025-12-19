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
      <?php
        $path = "../json/upcoming/*.json";
        $upcomingPerformances = glob($path);
        $performances = [];
        for ($i = 0; $i < count($upcomingPerformances); $i++){
          $contents = fileToArray($upcomingPerformances[$i]);
          $performanceDate = new DateTime($contents["date"]);
          $today = new DateTime();

          // if performance is today or later
          if ($performanceDate->format('Y-m-d') >= $today->format('Y-m-d')){
            $performances[] = $contents;
          }
        }
        usort($performances, 'compareDate');

        foreach ($performances as $performance){
          $date = new DateTime($performance["date"]);
          $formattedDate = $date->format('l, F j, Y');
          $formattedTime = date("g:i A", strtotime($performance["time"]));

          echo "<div class='container-fluid p-3'>";
          echo "<div class='row'>";
          echo "<div class='col-md-4'>";
          echo "<img src='../Resources/Images/". $performance["image"] ."' class='img-fluid'>";
          echo "</div>";
          echo "<div class='col-md-8'>";
          echo "<h3>". $performance["title"] . "</h3>";
          echo "<p>". $formattedDate .", " . $formattedTime . "</p>";
          echo "<p>". $performance["location"] . "</p>";
          echo "<p>". $performance['description'] . "</p>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
        }
      ?>
    </body>
</html>