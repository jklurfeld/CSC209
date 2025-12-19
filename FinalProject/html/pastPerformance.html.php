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
        <script src="../js/myLib.js"></script>
        <link rel=stylesheet href="../css/styles.css">
    </head>

    <body>
      <?php include "navBar.html.php"; ?>
      <?php

        $file = $_GET["a"];
        $filePath = "../json/past/" . $file;
        $arr = fileToArray($filePath);

        $date = new DateTime($arr["date"]);
        $formattedDate = $date->format('F j, Y');

        echo "<div class='container-fluid p-3'>";
        echo "<h2>". $arr["title"] . "</h2>";
        echo $arr["videoLink"];
        echo "<p>". $formattedDate . "</p>";
        echo "<p>". $arr["description"] . "</p>";
      ?>

      <?php 
      if (isset($_SESSION["verified"])) {
        echo "<p>Leave a comment</p>".
        "<textarea id='commentBox' type='text' name='comment' rows='5' cols='75' style='box-shadow: 2px 2px 15px 2px rgba(0, 0, 0, 0.3);'></textarea><br>".
        "<input id='file' type='hidden' name='jsonFile' value='" . $file . "'>".
        "<input id='username' type='hidden' name='user' value='" . $_SESSION["username"] . "'>".
        "<button onclick='addComment()'>Submit</button>";
      }
      else{
        echo "<p>Log in to leave a comment!</p>";
      }
      ?>
      <br>
      <?php
        echo "<div class='mt-3' id='commentDiv'>";
        $comments = $arr["comments"];
        displayComments($comments);
        echo "</div>";
        echo "</div>";
      ?>
    </body>
</html>