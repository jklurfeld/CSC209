<?php
session_start();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/slideShow.js"></script>
        <?php
            include "../php/functions.php";
        ?>
        <link rel="stylesheet" href="../css/myStyles.css">
    </head>
<body>
    <?php
    verifyUser();

    $path = "../Users/". $_SESSION["username"] ."/*.jpg";
    $imageArr = glob($path);
    
    echo "<h1>Welcome ". $_SESSION["username"]. "</h1>";
    ?>

    <form action="../php/upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" id="fileToUpload" name="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <a class="prev" onclick="plusSlides(-1)"><</a>
    <a class="next" onclick="plusSlides(1)">></a>

    <?php createSlides($imageArr); ?>

    <br>

    <?php createDots($imageArr); ?>

    <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    </script>

    <a href="logout.html.php"><button>Logout</button></a>

</body>
</html>