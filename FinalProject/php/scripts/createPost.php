<?php

include "../functions.php";

$nrPath = "../../json/nrPages.json";
$nrPages = fileToArray($nrPath);

if ($_POST["performanceType"] == "past"){
    $data = [
        "videoLink" => $_POST["videoLink"],
        "comments" => array()
    ];
    
    // create json file
    $filename = "../../json/past/pp". $nrPages["pastPerformanceId"] . ".json";
    
    $page = "Location: ../../html/pastPerformance.html.php?a=pp" . $nrPages["pastPerformanceId"] . ".json";
    
    // increment nrPages counter
    $nrPages["pastPerformanceId"]++;

}
else {
    $target_dir = "../../Resources/Images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    header("Location: ../../html/admin.html.php?success=false");
    exit();
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
    $data = [
        "image" => basename( $_FILES["fileToUpload"]["name"]),
        "time" => $_POST["time"],
        "location" => $_POST["location"]
    ];

    // create json file
    $filename = "../../json/upcoming/up". $nrPages["upcomingPerformanceId"] . ".json";

    $page = "Location: ../../html/upcomingPerformances.html.php";
    
    // increment nrPages counter
    $nrPages["upcomingPerformanceId"]++;
}

$data["date"] = $_POST["date"];
$data["title"] = $_POST["title"];
$data["description"] = $_POST["description"];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents($filename, $jsonData);

$file = fopen($nrPath, "w");
fwrite($file, json_encode($nrPages));
fclose($file);

// route to new page
header($page);

?>