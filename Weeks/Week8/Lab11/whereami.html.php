<html>
    <head>
        <?php 
            $path = dirname(realpath("whereami.html.php"));
            $basename = basename($path);
            $labNrString = substr($basename, -2);
            if (is_numeric($labNrString)){
                $labNr = (int) $labNrString;
            }
        ?>
    </head>

    <body>
        <p>This page figures out its whereabouts</p>
        <?php 
            echo "<p>My lab number is $labNr</p>";
        ?>
    </body>

</html>