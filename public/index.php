<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
<form action="post.php" method="post">
    <p><input type="text" name="name" placeholder="Логин" required></p>
    <p><input type="password" name="password" placeholder="Пароль" required></p>
    <p><input type="number" name="number" placeholder="Число" required></p>
    <p><input type="email" name = "email" placeholder="email" required></p>
    <p><select name="select" required>
        <option>Вариант 1</option>
        <option>Вариант 2</option>
        <option>Вариант 3</option>
    </select></p>
    <p>
        <input type="radio" name="radio" value="Первый вариант" required>Первый вариант
        <input type="radio" name="radio" value="Второй вариант"required>Второй вариант
    </p>
    <p><input type="checkbox" name="checkbox1" value="Первый вариант">Первый вариант</p>
    <p><input type="checkbox" name="checkbox2" value="Второй вариант">Второй вариант</p>
    <p><input type="checkbox" name="checkbox3" value="Третий вариант">Третий вариант</p>
    
    <input type="submit">
</form>

</body>
</html>

