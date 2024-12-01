<?php

function checkText($textarea):bool {
    return mb_strlen($textarea, 'UTF-8') >= 10;
}


function checkMaxLength($maxNumber):bool {
     return is_int($maxNumber) && $maxNumber >= 10 && $maxNumber <= 100;
}


function checkCut($choice):bool {
    return in_array($choice, ['cutBefore', 'cutAfter']);
    
}





