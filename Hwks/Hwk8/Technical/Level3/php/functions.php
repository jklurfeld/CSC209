<?php
    function fileToArray(){
        $arr = file_get_contents("../json/users.json");
        return json_decode($arr, true);
    }

    function createTable($users){
        echo "<table>";

        echo "<tr>";
        echo "<th><button type='button' onclick=\"sort('username')\">username</button></th>";
        echo "<th><button type='button' onclick=\"sort('password')\">password</button></th>";
        echo "<th><button type='button' onclick=\"sort('loggedtimes')\">loggedtimes</button></th>";
        echo "</tr>";
        
        for ($i = 0; $i < count($users);$i++){
            echo "<tr>";
            echo "<td>{$users[$i]['username']}</td>";
            echo "<td>{$users[$i]['password']}</td>";
            echo "<td>{$users[$i]['loggedtimes']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function extractFolderNumber($folderPath){
        $basename = basename($folderPath);
        $labNrString = substr($basename, -1);
        if (is_numeric($labNrString)){
            $labNr = (int) $labNrString;
        }
        return $labNr;
    }

    function verifyUser(){
        $arr = file_get_contents("../json/users.json");
        $users = json_decode($arr, true);
        $found = false;
    
        for ($i = 0; $i < count($users); $i++){
            $user = $users[$i];
            if (strcmp($user['username'],$_GET["username"]) == 0 && strcmp($user['password'], $_GET["password"]) == 0){
                // echo "Welcome ". $_GET["username"];
                updateFile($users, $i);
                $found = true;
                if ($_GET["username"] == "admin"){
                    header("Location: ../Admin/admin.html.php");
                }
                else{
                    $address = "User". $i;
                    header("Location: ../Users/$address/user.html.php");
                }
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