<?php
    include "../functions.php";

    $post = fileToArray($_POST["jsonFile"]);

    $post['location'] = $_POST["location"];
    $post['time'] = $_POST["time"];
    $post['image'] = $_POST['image'];
    $post['date'] = $_POST["date"];
    $post['title'] = $_POST["title"];
    $post['description'] = $_POST["description"];

    $file = fopen($_POST["jsonFile"], "w");
    fwrite($file, json_encode($post, JSON_PRETTY_PRINT));
    fclose($file);

    header("Location: ../../html/admin.html.php");
?>