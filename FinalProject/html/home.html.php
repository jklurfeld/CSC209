<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
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

    <div class="container-fluid m-3">
      <h3>Jessica's Performance Portfolio</h3>
    <div class="row">
    <div class="col-md-4">
      <img src="../Resources/Images/home.JPG" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
      <p>Jessica Klurfeld is a music and computer science double major in her senior year at Smith College. 
        She is the principal clarinetist of the Smith College Orchestra, and she was a winner of the 2023 Smith College Concerto competition. 
        Also an avid vocalist, Jessica sings with the Smith College Glee Club and Chamber Singers. 
        Her primary teachers include Hannah Berube, Lynn Sussman, and Amy Advocat. </p>
    </div>
  </div>
    </div>

  </body>
</html>