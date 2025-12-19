<?php
    include "../functions.php";

    $path = "../../json/upcoming/*.json";
    $upcomingPerformances = glob($path);

    $index = $_REQUEST["index"];
    unlink($upcomingPerformances[$index]);

    $upcomingPerformances = glob($path);
    createTableUpcomingPerformances($upcomingPerformances);

?>