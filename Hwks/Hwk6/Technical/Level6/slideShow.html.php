<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <?php 
    $imageArr = glob('./Images/*.jpg');
  ?>
  <script src="js/slideShow.js"></script>
  <?php
    include "php/myLib.php";
  ?>
</head>
<body>

<a class="prev" onclick="plusSlides(-1)"><</a>
<a class="next" onclick="plusSlides(1)">></a>

<?php createSlides($imageArr) ?>

<br>

<?php createDots($imageArr) ?>

<script>
  let slideIndex = 1;
  showSlides(slideIndex);
</script>

</body>
</html> 