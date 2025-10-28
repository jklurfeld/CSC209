<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <?php
    $cats = glob('./Images/Cats/*.jpg');
    $dogs = glob('./Images/Dogs/*.jpg');
    $flowers = glob('./Images/Flowers/*.jpg');
    $imageArr = array($cats, $dogs, $flowers);
  ?>
  <script src="js/slideShow.js"></script>
  <?php
    include "php/myLib.php";
  ?>
</head>
<body>

<p>Choose a folder:</p>
<select name="folders" id="folderSelect" onchange="changeFolder()">
  <!-- <option value="none">None</option> -->
  <option value="Cats">Cats</option>
  <option value="Dogs">Dogs</option>
  <option value="Flowers">Flowers</option>
</select>

<a class="prev" onclick="plusSlides(-1)"><</a>
<a class="next" onclick="plusSlides(1)">></a>

<?php createSlides($imageArr) ?>

<br>

<?php createDots($imageArr) ?>

<script>
  let slideIndex = 1;
  showSlides(slideIndex, "Cats");
</script>

</body>
</html> 