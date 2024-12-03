<?php
require_once "validation.php";
require_once "functionText.php";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['textarea'])) {
        $textarea = trim($_POST['textarea']);
    } else {
        $_POST['teaxtarea'] = '';
    }

    if (isset($_POST['maxNumber'])) {
        $maxNumber = intval($_POST['maxNumber']);
    } else {
        $_POST['maxNumber'] = 0;
    }

    if (isset($_POST['choice'])){
        $choice = $_POST['choice'];
    } else {
        $_POST['choice'] = '';

    }
   
    if (!checkText($textarea)) {
        header("Location: index.php?error=1");
        exit;
    }

    if (!checkMaxLength($maxNumber)) {
        header("Location: index.php?error=2");
        exit;
    }

    if (!checkCut($choice)) {
        header("Location: index.php?error=3");
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
