<?php
    function fileToArray($path){
        $arr = file_get_contents($path);
        return json_decode($arr, true);
    }

    function updateFile($users){
        $file = fopen("../../json/users.json", "w");
        fwrite($file, json_encode($users));
        fclose($file);
    }

    function verifyUser(){
        if ($_SESSION["verified"] == true || $_SESSION["verified"] == ""){
            return;
        }
        $arr = file_get_contents("../json/users.json");
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
                    header("Location: ../html/admin.html.php");
                }
            }
        }
        if ($found == false){
            echo "Login failed";
            header("Location: ../html/login.html.php");
            exit();
        }
        header("Location: ../../html/home.html.php");
    }

    function createTable($users){
        echo "<table>";

        echo "<tr>";
        echo "<th>username</th>";
        echo "<th>password</th>";
        echo "<th>Delete</th>";
        echo "<th>Edit</th>";
        echo "</tr>";
        
        for ($i = 1; $i < count($users);$i++){
            echo "<tr>";
            echo "<td>{$users[$i]['username']}</td>";
            echo "<td>{$users[$i]['password']}</td>";
            echo "<td><button type='button' onclick=\"deleteUser($i)\">Delete User</button></td>";
            echo "<td><button type='button' onclick=\"editUser($i)\">Edit User</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function createTablePerformances($jsonarr){
        echo "<table>";

        echo "<tr>";
        echo "<th>title</th>";
        echo "<th>date</th>";
        echo "<th>Delete</th>";
        echo "<th>Edit</th>";
        echo "</tr>";
        
        for ($i = 0; $i < count($jsonarr); $i++){
            $contents = fileToArray($jsonarr[$i]);
            echo "<tr>";
            echo "<td>{$contents['title']}</td>";
            echo "<td>{$contents['date']}</td>";
            echo "<td><button type='button' onclick=\"deletePost($i)\">Delete Post</button></td>";
            echo "<td><button type='button' data-bs-toggle='modal' data-bs-target='#myModal' onclick=\"editPost($i)\">Edit Post</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function displayComments($commentArr){
        // $commentArr = $commentArr[0];
        for ($i = 0; $i < count($commentArr); $i++){
            $comment = $commentArr[$i];
            // var_dump($comment);
            foreach ($comment as $key => $value) {
                echo "<p>" . $key . ": " . $value;
            }
        }

    }
?>