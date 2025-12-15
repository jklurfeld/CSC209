<?php
    include "../functions.php";

    $users = fileToArray("../../json/users.json");
    $index = $_REQUEST["index"];

    if ($_REQUEST["username"] != ""){
        $users[$index]['username'] = $_REQUEST["username"];
    }
    if ($_REQUEST["password"] != ""){
        $users[$index]['password'] = $_REQUEST["password"];
    }

    $file = fopen("../../json/users.json", "w");
    fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
    fclose($file);

    createTable($users);

?>