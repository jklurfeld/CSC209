<?php

    include "../functions.php";

    $path = "../../json/past/*.json";
    $pastPerformances = glob($path);
    $index = $_REQUEST["index"];
    $post = fileToArray($pastPerformances[$index]);

    echo "<form action='../php/scripts/editPost.php' method='post'>".
    "<div class='form-group'><label for='videoLink'><b>Video Link </b></label>".
    "<textarea class='form-control' type='text' name='videoLink' rows='6' cols='100' required>". $post["videoLink"] ."</textarea></div>".
    "<div class='form-group'><label for='date'><b>Date</b></label>".
    "<input class='form-control' type='date' name='date' value='". $post["date"] ."'required></div>".
    "<div class='form-group'><label for='title'><b>Title</b></label>".
    "<input class='form-control' type='text' name='title' value='". $post["title"] ."'required></div>".
    "<div class='form-group><label for='description'><b>Description</b></label>".
    "<textarea class='form-control' type='text' name='description' rows='6' cols='100' required>". $post["description"] ."</textarea></div>".
    "<div class='form-group'><input type='hidden' name='jsonFile' value='". $pastPerformances[$index] ."'></div><br>".
    "<button type='submit' class='btn btn-primary'>Submit</button></form>";
?>