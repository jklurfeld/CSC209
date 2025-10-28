<html>
    <head>
        <?php 
            $imageArr = glob('./Images/*.jpg');
            $imageArrLen = count($imageArr);
        ?>
        <script>
            var images = <?php echo json_encode($imageArr); ?>;
        </script>
        <script src="js/myLib.js"></script>
    </head>

    <body>
        <p>Choose an image:</p>
        <select name="images" id="imageSelect" onchange="changeImage()">
            <option value="none">None</option>
            <option value="mountain">Mountain</option>
            <option value="island">Island</option>
            <option value="tree">Tree</option>
        </select>
        <br>
        <?php
            for ($i = 0; $i < $imageArrLen; $i++){
                $shortName = basename($imageArr[$i], ".jpg");
                echo "<img src=$imageArr[$i] id=$shortName width='30%' style='display:none'>";
            }
        ?>
    </body>

</html>