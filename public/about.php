<?php
$users = require "storage.php";
$name = $_POST['name'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные пользователя</title>
</head>
<body>
    <h1>Ваши данные:</h1>
    <b>Ваш логин: <?php echo $name . "<br>" ?></b>
    <b>Ваш пароль: <?php echo $password ?></b>
    <h1>Данные о сервере:</h1>
    <pre><?= print_r($_SERVER) ?></pre>
    
    <form action="account.php">
        <button> Перейти к списку пользователей</button>
    </form>
</body>
</html>
