<?php
    include "../functions.php";

    $users = fileToArray("../../json/users.json");
    $index = $_REQUEST["index"];

    $users[$index]['username'] = $_REQUEST["username"];
    $users[$index]['password'] = $_REQUEST["password"];

    $file = fopen("../../json/users.json", "w");
    fwrite($file, json_encode($users));
    fclose($file);

    createTable($users);

?>