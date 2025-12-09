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

    <div class="container-fluid mt-3">
      <h3>Jessica's Performance Portfolio</h3>
      <!-- <p>This example adds a dropdown menu in the navbar.</p> -->
      <?php if (isset($_SESSION["verified"])) {
              echo "Welcome ". $_SESSION["username"];
            }
      ?>
    </div>

  </body>
</html>