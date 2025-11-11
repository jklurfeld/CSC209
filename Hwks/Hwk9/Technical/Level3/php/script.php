<?php
    include "functions.php";

    $users = fileToArray();

    // echo json_encode($users);
    createTable($users);

?>