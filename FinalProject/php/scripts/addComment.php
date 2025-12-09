<?php
    include "../functions.php";

    $path = "../../json/past/". $_REQUEST["file"];
    $post = fileToArray($path);
    $newComment = array($_REQUEST["user"] => $_REQUEST["comment"]);
    array_unshift($post["comments"], $newComment);

    $file = fopen($path, "w");
    fwrite($file, json_encode($post, JSON_PRETTY_PRINT));
    fclose($file);

    displayComments($post["comments"]);
?>