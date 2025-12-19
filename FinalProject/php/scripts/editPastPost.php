<?php
    include "../functions.php";

    $post = fileToArray($_POST["jsonFile"]);

    $post['videoLink'] = $_POST["videoLink"];
    $post['date'] = $_POST["date"];
    $post['title'] = $_POST["title"];
    $post['description'] = $_POST["description"];

    $file = fopen($_POST["jsonFile"], "w");
    fwrite($file, json_encode($post, JSON_PRETTY_PRINT));
    fclose($file);

    header("Location: ../../html/admin.html.php");
?>