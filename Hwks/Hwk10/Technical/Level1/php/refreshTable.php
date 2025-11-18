<?php
    include "functions.php";

    $users = fileToArray();

    createTable($users);

?>