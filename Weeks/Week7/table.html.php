<?php 
    $DATES = array("Sep 1-7", "Sep 8-14", "Sep 15-21");
    $DESCRIPTION = array("Software setup", "Intro to HTML", "Intro to CSS", "Intro to Javascript");
?>

<html>
    <body>
        <?php //var_dump($DATES) ?>
        <?php
        echo "<table>";
        echo "<tr>
        <th>Week</th>
        <th>Date</th>
        <th>Description</th>";
        for ($i = 0; $i < count($DATES); $i++){
            echo "<tr>";
            $j = $i+1;
            echo "<td> $j</td>";
            echo("<td>". $DATES[$i]."</td>");
            echo("<td>". $DESCRIPTION[$i]. "</td>");
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>