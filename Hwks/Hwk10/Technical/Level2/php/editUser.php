<?php
    include "functions.php";

    $users = fileToArray();
    $index = $_REQUEST["index"];
    // var_dump($index);
    // var_dump($users[$index]['username']);
    // var_dump($_REQUEST["username"]);

    if ($_REQUEST["username"]){
        $oldFolder = "../Users/" . $users[$index]['username'];
        $newName = "../Users/" . $_REQUEST["username"];
        rename($oldFolder, $newName);
        $users[$index]['username'] = $_REQUEST["username"];
    }

    $users[$index]['password'] = $_REQUEST["password"];

    $file = fopen("../json/users.json", "w");
    fwrite($file, json_encode($users));
    fclose($file);

    createTable($users);

//     $duplicate = false;

// // check if username already exists
// for ($i = 0; $i < count($users); $i++){
//     $user = $users[$i];
//     if (strcmp($user['username'],$_POST["username"]) == 0){
//         echo "Username already exists.";
//         $duplicate = true;
//     }
// }

// if ($duplicate == false){
//     $users[] = [
//         "username" => $_POST["username"],
//         "password" => $_POST["password"],
//         "loggedtimes" => 0,
//         "minuteslogged" => array(),
//     ];
//     $file = fopen("../json/users.json", "w");
//     fwrite($file, json_encode($users));
//     $folderName = "../Users/". $_POST["username"] . "/";
//     mkdir($folderName);
//     echo "User created sucessfully.";
// }
// echo "<br>";
// // make link to home page
// echo "<a href='../html/login.html.php'>Back to Login Page</a>";

?>