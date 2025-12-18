<?php
include "../functions.php";

$users = fileToArray("../../json/users.json");
$duplicate = false;

// check if username already exists
for ($i = 0; $i < count($users); $i++){
    $user = $users[$i];
    if (strcmp($user['username'],$_POST["username"]) == 0){
        echo "Username already exists.";
        $duplicate = true;
    }
}

if ($duplicate == false){
    $users[] = [
        "username" => $_POST["username"],
        "password" => $_POST["password"]
    ];
    updateFile($users);
    echo "User created sucessfully.";
}

header("Location: ../../html/login.html.php?success=true");

?>