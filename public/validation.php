<?php
function checkText($textarea):bool {
    if (mb_strlen($textarea, 'UTF-8') >= 10){
        return true;
    }
    return false;
}
function checkMaxLength($maxNumber):bool {
    if (is_int($maxNumber) && $maxNumber >= 10 && $maxNumber <= 100){
        return true;
    }
     return false;
}
function checkCut($choice):bool {
    if (in_array($choice, ['cutBefore', 'cutAfter'])){
        return true;
    }
    return false;
}
