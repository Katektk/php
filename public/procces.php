<?php
require_once "validation.php";
require_once "functionText.php";

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $textarea = trim($_POST['textarea']);
$maxNumber = intval($_POST['maxNumber']);
$choice = isset($_POST['choice']) ? $_POST['choice'] : '';

    // Проверки
if (!checkText($textarea)) {
    echo "Ошибка: Текст должен содержать минимум 10 символов.";
    exit;
}

if (!checkMaxLength($maxNumber)) {
    echo "Ошибка: Количество символов в строке должно быть от 10 до 100 символов.";
    exit;
}

if (!checkCut($choice)) {
    echo "Ошибка: Выберите, что делать, если слово превышает ограничение!";
    exit;
}

$lines = formatText($textarea, $maxNumber, $choice);
 
$fileName = "text" . ".txt";
$file = fopen($fileName, 'w');
if (!$file) {
    echo "Не удалось создать файл для записи.";
    exit;
}
foreach ($lines as $line) {
    fwrite($file, $line . " (" . mb_strlen($line, 'UTF-8') . ")\n");
}
fclose($file);

echo "Текст был успешно отформатирован и записан в файл.<br>";
echo "<a href='$fileName' download>Скачать файл</a>";



}
