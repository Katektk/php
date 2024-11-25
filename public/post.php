<?php
$name = $_POST['name'];
$pass = $_POST['password'];
$checkbox1 = isset($_POST['checkbox1']);
$checkbox2 = isset($_POST['checkbox2']);
$checkbox3 = isset($_POST['checkbox3']);

if(strlen($name) <= 2){
    echo "Логин должен состоять минимум из трех символов!";
    require "index.php";
    
}
else if (strlen($pass) <8){
    echo "Пароль слишком короткий. Введите минимум 8 символов!";
    require "index.php";
}
else if(empty($checkbox1) && empty($checkbox2) && empty($checkbox3)){
    echo "Выберите хотя бы один вариант checkbox"; 
    require "index.php";
    
}
else require "log.php";
    