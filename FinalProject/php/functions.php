<?php
    function fileToArray($path){
        $arr = file_get_contents($path);
        return json_decode($arr, true);
    }

    function updateFile($users){
        $file = fopen("../../json/users.json", "w");
        fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
        fclose($file);
    }

    function compareDate($a, $b){
        return strtotime($a["date"]) <=> strtotime($b["date"]);
      }

    function createTable($users){
        echo "<table class='table table-striped'>";
        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<th>username</th>";
        echo "<th>password</th>";
        echo "<th>Delete</th>";
        echo "<th>Edit</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        for ($i = 1; $i < count($users);$i++){
            echo "<tr>";
            echo "<td>{$users[$i]['username']}</td>";
            echo "<td>{$users[$i]['password']}</td>";
            echo "<td><button type='button' class='btn btn-danger' onclick=\"deleteUser($i)\">Delete User</button></td>";
            echo "<td><button type='button' class='btn btn-info' onclick=\"editUser($i)\">Edit User</button></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

    function createTablePerformances($jsonarr){
        echo "<table class='table table-striped'>";
        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<th>title</th>";
        echo "<th>date</th>";
        echo "<th>Delete</th>";
        echo "<th>Edit</th>";
        echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";
        for ($i = 0; $i < count($jsonarr); $i++){
            $contents = fileToArray($jsonarr[$i]);
            echo "<tr>";
            echo "<td>{$contents['title']}</td>";
            echo "<td>{$contents['date']}</td>";
            echo "<td><button type='button' class='btn btn-danger' onclick=\"deletePost($i)\">Delete Post</button></td>";
            echo "<td><button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#myModal' onclick=\"editPost($i)\">Edit Post</button></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

    function displayComments($commentArr){
        for ($i = 0; $i < count($commentArr); $i++){
            $comment = $commentArr[$i];
            foreach ($comment as $key => $value) {
                echo "<p class='comment rounded'>" . $key . ": " . $value;
            }
        }

    }
?>