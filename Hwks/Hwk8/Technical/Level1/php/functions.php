<?php
    function fileToArray(){
        $arr = file_get_contents("json/users.json");
        return json_decode($arr, true);
    }

    function createTable($users){
        echo "<table>";
        $columns = array_keys($users[0]);
        echo "<tr>";
        for ($i = 0; $i < count($columns); $i++){
            echo "<th><button type='button' onclick=\"sort('$columns[$i]')\">$columns[$i]</button></th>";
        }
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
?>