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
        echo "<th><button type='button'>minuteslogged</button></th>";
        echo "</tr>";
        
        for ($i = 0; $i < count($users);$i++){
            echo "<tr>";
            echo "<td>{$users[$i]['username']}</td>";
            echo "<td>{$users[$i]['password']}</td>";
            echo "<td>{$users[$i]['loggedtimes']}</td>";
            echo "<td>". implode(", ", $users[$i]['minuteslogged']) ."</td>";
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
        if ($_SESSION["verified"] == true){
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
                $_SESSION["startTime"] = date_create();
                updateFile($users, $i);
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
    }
    
    function updateFile($users, $index){
        $users[$index]["loggedtimes"] += 1;
        $file = fopen("../json/users.json", "w");
        fwrite($file, json_encode($users));
    }

    function logout(){
        var_dump($_SESSION["startTime"]);
        // $users = fileToArray();
        $now = date_create();
        $diff = date_diff($_SESSION["startTime"], $now);
        echo $diff;
    }

    function createSlides($imageArr){
        $nrSlides = count($imageArr);
        for ($i = 0; $i < $nrSlides; $i++){
            $caption = basename($imageArr[$i],".jpg");
            $j = $i + 1;
            echo "<div class='mySlides fade'>".
            "<div class='numbertext'>$j/$nrSlides</div>".
            "<img src=$imageArr[$i] style='width:100%'>".
            "<div class='text'>$caption</div>".
            "</div>";
        }
    }

    function createDots($imageArr){
        $divStr = "<div style='text-align:center'>";
        for ($i = 0; $i < count($imageArr); $i++){
            $currentSlide = $i + 1;
            $divStr .= "<span class='dot' onclick='currentSlide($currentSlide)'></span>";
        }
        $divStr .= "</div>";
        echo $divStr;
    }
?>