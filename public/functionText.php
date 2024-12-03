<?php 
function formatText(string $textarea, int $maxNumber, string $choice) :array { 
    $words = preg_split('/\s+/', $textarea); 
    $lines = []; 
    $currentLineArray = []; 
 
    foreach ($words as $word) { 
        $wordLength = mb_strlen($word, 'UTF-8'); 

        if (mb_strlen(implode(' ', $currentLineArray), 'UTF-8') + $wordLength + 1 > $maxNumber) { 
            if ($wordLength > $maxNumber && $choice === 'cutBefore') { 
                if (!empty($currentLineArray)) { 
                    $lines[] = implode(' ', $currentLineArray); 
                } 
                $lines[] = mb_substr($word, 0, $maxNumber, 'UTF-8'); 
                $currentLineArray = [mb_substr($word, $maxNumber, null, 'UTF-8')]; 
            } else { 
                if (!empty($currentLineArray)) { 
                    $lines[] = implode(' ', $currentLineArray); 
                } 
                $currentLineArray = [$word]; 
            } 
        } else { 
            $currentLineArray[] = $word; 
        } 
    } 

    if (!empty($currentLineArray)) { 
        $lines[] = implode(' ', $currentLineArray); 
    } 
    return $lines;
}
