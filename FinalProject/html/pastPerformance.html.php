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

        echo "<div class='container'>";
        echo "<h1>". $arr["title"] . "</h1>";
        echo $arr["videoLink"];
        echo "<p>". $arr["date"] . "</p>";
        echo "<p>". $arr["description"] . "</p>";
      ?>

      <?php 
      if (isset($_SESSION["verified"])) {
        echo "<p>Leave a comment</p>".
        // form comment version
        // "<form action='../php/scripts/addComment.php' method='post'>".
        // "<textarea id='commentBox' type='text' name='comment' rows='5' cols='100'></textarea><br>".
        // "<input type='hidden' name='jsonFile' value='" . $file . "'>".
        // "<input type='hidden' name='user' value='" . $_SESSION["username"] . "'>".
        // "<input type='submit'>".
        // "</form>";

        // ajax comment
        "<textarea id='commentBox' type='text' name='comment' rows='5' cols='100'></textarea><br>".
        "<input id='file' type='hidden' name='jsonFile' value='" . $file . "'>".
        "<input id='username' type='hidden' name='user' value='" . $_SESSION["username"] . "'>".
        "<button onclick='addComment()'>Submit</button>";
      }
      else{
        echo "<p>Log in to leave a comment!</p>";
      }
      ?>

      <!-- <p>Leave a comment</p>
      <form action="../php/scripts/addComment.php" method="post">
        <textarea type="text" name="comment" rows="5" cols ="100"></textarea><br>
        <?php //echo "<input type='hidden' name='jsonFile' value='" . $file . "'>"; ?> 
        <button onclick="addComment()">Submit Comment</button>
      </form> -->

      <?php
        echo "<div id='commentDiv'>";
        $comments = $arr["comments"];
        displayComments($comments);
        echo "</div>";
        echo "</div>";
      ?>
    </body>
</html>