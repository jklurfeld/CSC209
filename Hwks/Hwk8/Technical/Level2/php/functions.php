<?php
function verifyUser(){
    $arr = file_get_contents("../json/users.json");
    $users = json_decode($arr, true);
    $found = false;

    for ($i = 0; $i < count($users); $i++){
        $user = $users[$i];
        if (strcmp($user['username'],$_GET["username"]) == 0 && strcmp($user['password'], $_GET["password"]) == 0){
            echo "Welcome ". $_GET["username"];
            updateFile($users, $i);
            $found = true;
        }
    }
    if ($found == false){
        echo "Login failed";
        header("Location: ../login.html.php");
        exit();
    }
}

function updateFile($users, $index){
    $users[$index]["loggedtimes"] += 1;
    $file = fopen("../json/users.json", "w");
    fwrite($file, json_encode($users));
}
?>