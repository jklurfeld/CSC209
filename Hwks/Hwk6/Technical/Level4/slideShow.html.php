<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <?php 
    $imageArr = glob('./Images/*.jpg');
  ?>
  <script>
    const DESCRIPTIONS = ["Mountain", "Island", "Trees"];
    const IMAGE = <?php echo json_encode($imageArr); ?>;
    const NRIMAGES = IMAGE.length;
  </script>
  <script src="js/slideShow.js"></script>
</head>
<body>

<div id="mySlideshow" class="slideshow-container">

<a class="prev" onclick="plusSlides(-1)"><</a>
<a class="next" onclick="plusSlides(1)">></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
  createSlides();
  let slideIndex = 1;
  showSlides(slideIndex);
</script>

</body>
</html> 