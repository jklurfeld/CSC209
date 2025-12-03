<?php
$data = [
    "videoLink" => $_POST["videoLink"],
    "date" => $_POST["date"],
    "title" => $_POST["title"],
    "description" => $_POST["description"],
    "comments" => []
];

$filename = "../../json/past/". $_POST["title"] . ".json";
$jsonData = json_encode($data);
file_put_contents($filename, $jsonData);

$page = "Location: ../../html/pastPerformance.html.php?a=" . $_POST["title"] . ".json";

header($page);

?>