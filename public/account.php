<?php
$users = require "storage.php"; 

if (isset($_GET['count'])) 
    $count = $_GET['count']; 
else
    $count = 5; 

$usersToShow = array_slice($users, 0, $count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список пользователей</title>
</head>
<body>
    <h1>Список пользователей:</h1>
    <?php foreach ($usersToShow as $user) { ?>
    <p><?php echo ($user['name']); ?> - <?php echo ($user['password']); ?></p>
    <?php } ?>
    <form action="index.php">
        <button>Вернуться на главную</button>
    </form>
</body>
</html>