<?php
session_start();

$arr = file_get_contents("../../json/users.json");
$users = json_decode($arr, true);
$found = false;

for ($i = 0; $i < count($users); $i++){
    $user = $users[$i];
    if (strcmp($user['username'],$_GET["username"]) == 0 && strcmp($user['password'], $_GET["password"]) == 0){
        $_SESSION["verified"] = true;
        $_SESSION["userIndex"] = $i;
        $_SESSION["username"] = $_GET["username"];
        $found = true;
        if ($_GET["username"] == "admin"){
            header("Location: ../../html/admin.html.php");
            exit();
        }
    }
}
if ($found == false){
    echo "Login failed";
    header("Location: ../../html/login.html.php?success=false");
    exit();
}
header("Location: ../../html/home.html.php");

?>