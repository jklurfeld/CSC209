<?php
session_start();
?>
<!DOCTYPE HTML>
<html>  
    <head>
    <link rel="stylesheet" href="../css/myStyles.css">
    </head>
<body>

<h1>Goodbye!</h1>
<?php
    include "../php/functions.php";
    
    $now = date_create();
    $diff = date_diff($_SESSION["startTime"], $now);
    $users = fileToArray();
    $users[$_SESSION["userIndex"]]["minuteslogged"][] = $diff->i;
    $file = fopen("../json/users.json", "w");
    fwrite($file, json_encode($users));

    session_unset();
    session_destroy();
?>

</body>
</html>