<?php
    include "../functions.php";

    $users = fileToArray();
    $index = $_REQUEST["index"];
    $username = $users[$index]["username"];
    array_splice($users, $index, 1);

    $path = "../Users/". $username ."/*.jpg";
    $imageArr = glob($path);

    // delete user folder
    for ($i = 0; $i < count($imageArr); $i++){
        unlink($imageArr[$i]);
    }
    $folder = "../Users/" . $username;
    rmdir($folder);

    // get rid of user in json
    $file = fopen("../json/users.json", "w");
    fwrite($file, json_encode($users));
    fclose($file);

    createTable($users);

?>