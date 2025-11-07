<?php
$user = new stdClass();
$user->username = "alice";
$user->password = "password";
$user->age = 21;

$myJson = json_encode($user);
echo $myJson;