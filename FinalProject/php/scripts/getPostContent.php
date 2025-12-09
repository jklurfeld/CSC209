<?php

    include "../functions.php";

    $path = "../../json/past/*.json";
    $pastPerformances = glob($path);
    $index = $_REQUEST["index"];
    $post = fileToArray($pastPerformances[$index]);

    echo "<form action='../php/scripts/editPost.php' method='post'>".
    "<label for='videoLink'><b>Video Link </b></label>".
    "<input type='text' name='videoLink' value='". $post["videoLink"] ."' required><br>".
    "<label for='date'><b>Date</b></label>".
    "<input type='date' name='date' value='". $post["date"] ."'required><br>".
    "<label for='title'><b>Title</b></label>".
    "<input type='text' name='title' value='". $post["title"] ."'required><br>".
    "<label for='description'><b>Description</b></label>".
    "<input type='text' name='description' value='". $post["description"] ."'required><br>".
    "<input type='hidden' name='jsonFile' value='". $pastPerformances[$index] ."'>".
    "<button type='submit'>Submit</button></form>";
?>