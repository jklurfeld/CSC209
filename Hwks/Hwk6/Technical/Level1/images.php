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
        <script>
            createImages();
        </script>
    </body>

</html>