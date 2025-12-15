<?php
    include "../functions.php";

    $post = fileToArray($_POST["jsonFile"]);

    $post['videoLink'] = $_POST["videoLink"];
    $post['date'] = $_POST["date"];
    $post['title'] = $_POST["title"];
    $post['description'] = $_POST["description"];
    // probably going to have to have hidden input in getPostContent.php for comments too and then just write them again to the json

    $file = fopen($_POST["jsonFile"], "w");
    fwrite($file, json_encode($post, JSON_PRETTY_PRINT));
    fclose($file);

    header("Location: ../../html/admin.html.php");
?>