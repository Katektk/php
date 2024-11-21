<?php
$users = [];
for ($i = 1; $i <= 100; $i++) {
    $login = "login$i";
    $pass = "pass$i";
    $users[] = ['name' => $login, 'password'=> $pass];
}
return $users;
