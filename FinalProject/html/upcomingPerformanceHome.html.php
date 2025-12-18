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
          $performances[] = $contents;
        }

        usort($performances, 'compareDate');
        var_dump($performances);
      ?>
    </body>
</html>