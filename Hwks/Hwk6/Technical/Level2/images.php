<html>
    <head>
        <?php 
            $imageArr = glob('./Images/*.jpg');
            $imageArrLen = count($imageArr);
        ?>
    </head>

    <body>
        <?php 
            for ($i = 0; $i < $imageArrLen; $i++){
                echo "<img src=$imageArr[$i] width='30%'>";
            }
        ?>
    </body>

</html>