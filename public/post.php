<?php
$users = require "storage.php";
$name = $_POST['name'];
$password = $_POST['password'];

$isUserFound = false;

foreach ($users as $user) {
    if ($user['name'] == $name && $user['password'] == $password) {
        $isUserFound = true;
        break;
    }
}

if (!$isUserFound) {
    echo "Такого пользователя не существует.";
    require "index.php";
    exit;
}
require "about.php";
