<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <?php
            include "php/myLib.php";
            $folders = glob("../Technical/Level*/*.php");
        ?>
    </head>
    <body>
        <h1>Creative</h1>
        <p>I spent .5 hours on Creative. </p>
        <p>Below are the links to the main pages of each level of the technical portion of the homework generated dynamically using php.</p>
        <?php createButtons($folders); ?>
    </body>
</html>