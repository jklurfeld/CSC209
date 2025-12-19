<?php
    include "../functions.php";

    $path = "../../json/past/*.json";
    $pastPerformances = glob($path);

    $index = $_REQUEST["index"];
    unlink($pastPerformances[$index]);

    $pastPerformances = glob($path);
    createTablePastPerformances($pastPerformances);

?>