<?php
    function createButtons($folders){
        $linkStr = "";
        for ($i = 0; $i < count($folders); $i++){
            $href = $folders[$i];
            $onclick = "location.href='$href'";
            $j = $i + 1;
            $linkStr .= "<button onclick=\"$onclick\">Level $j</button>";
        }
        echo $linkStr;
    }
?>