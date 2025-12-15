<?php
    session_start();

    include "../functions.php";

    $users = fileToArray("../../json/users.json");

    if ($_POST['pwd'] != ""){
        foreach ($users as &$user){
            if ($user['username'] == $_POST['username']){
                $user['password'] = $_POST['pwd'];
            }
        }
        unset($user);
    }

    if ($_POST['newUsername'] != ""){
        // check if username already exists
        for ($i = 0; $i < count($users); $i++){
            $user = $users[$i];
            if (strcmp($user['username'],$_POST["newUsername"]) == 0){
                header("Location: ../../html/userSettings.html.php?success=false");
                exit;
            }
        }
        // echo $_POST['username'] . " ". $_POST['newUsername'];
        foreach ($users as &$user){
            if ($user['username'] == $_POST['username']){
                $_SESSION['username'] = $_POST["newUsername"];
                $user['username'] = $_POST['newUsername'];
            }
        }
        unset($user);
    }

    $file = fopen("../../json/users.json", "w");
    fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
    fclose($file);

    header("Location: ../../html/userSettings.html.php?success=true");

?>