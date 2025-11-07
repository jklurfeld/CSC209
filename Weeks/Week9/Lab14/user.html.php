<html>
<body>

<?php
function verifyUser(){
    $arr = file_get_contents("users.json");
    $users = json_decode($arr, true);
    $found = false;
    // foreach ($users as $user){
    //     if (strcmp($user['username'],$_GET["username"]) == 0 && strcmp($user['password'], $_GET["password"]) == 0){
    //         echo "Welcome ". $_GET["username"];
    //         updateFile($users);
    //         $found = true;
    //     }
    // }

    for ($i = 0; $i < count($users); $i++){
        $user = $users[$i];
        // var_dump($user);
        if (strcmp($user['username'],$_GET["username"]) == 0 && strcmp($user['password'], $_GET["password"]) == 0){
            echo "Welcome ". $_GET["username"];
            updateFile($users, $i);
            $found = true;
        }
    }
    if ($found == false){
        echo "Login failed";
        // sleep(3);
        header("Location: login.html.php");
        exit();
    }
}

function updateFile($users, $index){
    // var_dump($users[$index]);
    $users[$index]["loggedtimes"] += 1;
    $file = fopen("users.json", "w");
    fwrite($file, json_encode($users));
    // var_dump($users[$index]);
}

verifyUser();
?>

</body>
</html>