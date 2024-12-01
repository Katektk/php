<?php 
function formatText(string $textarea, int $maxNumber, string $choice): array { 
    // Разделяем текст на слова, игнорируя лишние пробелы
    $words = preg_split('/\s+/', $textarea); 
    $lines = []; // будет хранить строки текста
    $currentLineArray = []; // Массив для слов текущей строки 
 
    foreach ($words as $word) { 
        $wordLength = mb_strlen($word, 'UTF-8'); //длина слова
 
        // Проверяем, поместится ли слово в текущую строку
        if (mb_strlen(implode(' ', $currentLineArray), 'UTF-8') + $wordLength + 1 > $maxNumber) { 
            if ($wordLength > $maxNumber && $choice === 'cutBefore') { 
               
                if (!empty($currentLineArray)) { 
                    $lines[] = implode(' ', $currentLineArray); 
                } 
                $lines[] = mb_substr($word, 0, $maxNumber, 'UTF-8'); // Первая часть слова
                $currentLineArray = [mb_substr($word, $maxNumber, null, 'UTF-8')]; // Остаток слова
            } else { 
                // Перенос слова на следующую строку
                if (!empty($currentLineArray)) { 
                    $lines[] = implode(' ', $currentLineArray); 
                } 
                $currentLineArray = [$word]; // Начинаем новую строку с текущего слова 
            } 
        } else { 
            // Добавляем слово в текущую строку
            $currentLineArray[] = $word; 
        } 
    } 
 
    // Добавляем последнюю строку, если в ней есть слова
    if (!empty($currentLineArray)) { 
        $lines[] = implode(' ', $currentLineArray); 
    } 
 
    return $lines; // Возвращаем массив строк
}
