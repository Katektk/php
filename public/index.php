<?php
require_once "form.html";
require_once "post.php";
if (isset($_GET['error'])) {
    switch ($_GET['error']) {
    case '1':
        echo "<p class='error'>Текст должен содержать минимум 10 символов.</p>";
        break;
    case '2':
        echo "<p class='error'>Количество символов в строке должно быть от 10 до 100.</p>";
        break;
    case '3':
        echo "<p class='error'>Выберите, что делать, если слово превышает ограничение!</p>";
        break; 
    }
}
