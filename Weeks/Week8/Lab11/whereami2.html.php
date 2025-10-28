<html>
    <head>
        <?php
            include "php/myLib.php";
        ?>
    </head>

    <body>
        <?php 
            $path = dirname(realpath("whereami.html.php"));
            $nr = extractFolderNumber($path);
            echo "<p>This is work for Lab $nr</p>";
        ?>
    </body>

</html>