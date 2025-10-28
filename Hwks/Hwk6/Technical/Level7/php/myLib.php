<?php
    function createSlides($imageArr){
        $nrFolders = count($imageArr);
        for ($i = 0; $i < $nrFolders; $i++){
            $nrSlides = count($imageArr[$i]);
            $class = basename(dirname($imageArr[$i][0]));
            for ($m = 0; $m < $nrSlides; $m++){
                $caption = basename($imageArr[$i][$m],".jpg");
                $j = $m + 1;
                $img = $imageArr[$i][$m];
                echo "<div class='mySlides fade $class'>".
                "<div class='numbertext'>$j/$nrSlides</div>".
                "<img src=$img style='width:100%'>".
                "<div class='text'>$caption</div>".
                "</div>";
            }
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