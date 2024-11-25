<?php 
$time = date('Y-m-d H:i:s'); 
$data = [
    'Логин' => ($_POST['name']),
    'Пароль' => ($_POST['password']),
    'Число' =>($_POST['number']),
    'Email' => ($_POST['email']),
    'Поле Select' => ($_POST['select']),
    'Поле Radio' => ($_POST['radio']),
    
    ];

    if (isset($_POST['checkbox1'])) {
        $data['Checkbox'][] = $_POST['checkbox1'];
    }
    if (isset($_POST['checkbox2'])) {
        $data['Checkbox'][] = $_POST['checkbox2']; 
    }
    if (isset($_POST['checkbox3'])) {
        $data['Checkbox'][] = $_POST['checkbox3']; 
    }
    $data['Дата'] = $time;

    echo '<pre>' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) .'<pre>' ;



