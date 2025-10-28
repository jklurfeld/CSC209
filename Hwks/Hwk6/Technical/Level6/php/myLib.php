<?php
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