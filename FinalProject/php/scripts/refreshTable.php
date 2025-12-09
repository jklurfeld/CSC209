<?php
    include "../functions.php";

    $users = fileToArray("../../json/users.json");

    createTable($users);

?>