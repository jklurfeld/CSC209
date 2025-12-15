<?php
    include "../functions.php";

    $users = fileToArray("../../json/users.json");
    $index = $_REQUEST["index"];
    $username = $users[$index]["username"];
    array_splice($users, $index, 1);

    // get rid of user in json
    $file = fopen("../../json/users.json", "w");
    fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
    fclose($file);

    createTable($users);

?>