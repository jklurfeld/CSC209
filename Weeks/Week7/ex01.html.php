<?php 
    $DATES = array("Sep 1-7", "Sep 8-14", "Sep 15-21");
    $DESCRIPTION = array("Software setup", "Intro to HTML", "Intro to CSS", "Intro to Javascript");
?>

<html>
    <body>
        <?php //var_dump($DATES) ?>
        <?php
        for ($i = 0; $i < count($DATES); $i++){
            $j = $i+1;
            echo "<h1>Week $j</h1>";
            echo("<h2>Date: ". $DATES[$i]."</h2>");
            echo("<h3>Description: ". $DESCRIPTION[$i]. "</h3>");
            echo "<br>";
        }
        ?>
    </body>
</html>