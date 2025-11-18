<?php
    include "functions.php";

    $users = fileToArray();
    var_dump($users);
    $index = $_REQUEST["index"];
    var_dump($index);
    var_dump($users[$index]['username']);
    var_dump($_POST["username"]);

    if ($_POST["username"]){
        $users[$index]['username'] = $_POST["username"];
        $oldFolder = "../Users/" . $users[$index]['username'];
        $newName = "../Users/" . $_POST["username"];
        rename($oldFolder, $newName);
    }

    // get rid of user in json
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