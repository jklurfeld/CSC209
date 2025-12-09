<?php
include "../functions.php";

$data = [
    "videoLink" => $_POST["videoLink"],
    "date" => $_POST["date"],
    "title" => $_POST["title"],
    "description" => $_POST["description"],
    "comments" => array()
];

$nrPath = "../../json/nrPages.json";
$nrPages = fileToArray($nrPath);

// create json file
$filename = "../../json/past/pp". $nrPages["pastPerformanceId"] . ".json";
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents($filename, $jsonData);

$page = "Location: ../../html/pastPerformance.html.php?a=pp" . $nrPages["pastPerformanceId"] . ".json";

// increment nrPages counter
$nrPages["pastPerformanceId"]++;
$file = fopen($nrPath, "w");
fwrite($file, json_encode($nrPages));
fclose($file);

// route to new page
header($page);

?>