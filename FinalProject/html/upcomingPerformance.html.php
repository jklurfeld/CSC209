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

        $file = $_GET["a"];
        $filePath = "../json/upcoming/" . $file;
        $arr = fileToArray($filePath);

        echo "<div class='container'>";
        echo "<h1>". $arr["title"] . "</h1>";
        if ($arr["liveStreamLink"]){
          echo "Watch the livestream <a href=" . $arr["liveStreamLink"] . ">here</a>";
        }
        echo "<p>". $arr["date"] . "</p>";
        echo "<p>". $arr["description"] . "</p>";
        echo "</div>";
      ?>
    </body>
</html>