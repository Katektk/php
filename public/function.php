<?php
    // 1 функция
    function isPositive( int $a):bool {
         
         if ($a > 0)
            return true;
         else 
            return false;
    }
    $result = isPositive(0);
    if ($result) 
        echo "Число положительное <br>"; 
     else 
        echo "Число неположительное <br>"; 
    

    // 2 функция
    function length( string $b):int{
       return strlen($b) ;
    }
    $result = length("Hello");
    echo($result) . '<br>';

    // 3 функция
    function lastSymbol (string $c):string{
        return (mb_substr($c,-1));
    }
    $result = lastSymbol("Привет");
    echo $result . '<br>';

    //4 функция 
    function checkEven (int $d):bool{
        if ($d % 2 == 0)
            return true;
        else
            return false;
    }
    $result = checkEven(51);
    if ($result)
        echo "Четное число <br>";
    else
        echo "Нечетное число <br>";


    // 5 функция
    function checkFirstletter (string $word_1, string $word_2):bool{
        if (mb_strtolower(mb_substr($word_1, 0, 1)) == mb_strtolower(mb_substr($word_2, 0, 1)))
            return true;
        else 
            return false;
    }
     $result = checkFirstletter("Кошка", "каша");
     if ($result)
        echo "Совпадает <br>";
    else   
        echo "Не совпадает <br>";

    

    // 6 функция
    function firstNumber (int $a):string {
        return str_split($a) [0] ;
    }
    $result = firstNumber(1040);
        echo $result . '<br>';

    // 7 функция 
    function secondlast (string $a):string{
        if (mb_strlen($a) > 1) 
            return mb_substr($a, -2, 1);
        else    
            return '';
    }
     $result = secondlast("Привет");
        echo $result . '<br>';

    // 8 функция
    function roundArr(array $arr):array {
        $roundedArr = [];
        foreach ($arr as $value) {
            $roundedArr[] = round($value);
        }
        return $roundedArr ;
    }
     $result = roundArr([15.5, 6.7, 8.4, 23] );
        print_r($result) ;
        echo '<br>';
    
    // 9 функция
    function cutString(array $arr):array { 
        $arr2 = [];
        foreach ($arr as $value){
            if (strlen($value) > 5)
                $arr2[]= substr($value, 0, 5);
            else if (strlen($value) < 5){ 
               
                $arr2[] = (str_pad($value, 5, "x")); 
            }
            else
                $arr2[] = $value;
        }
        return $arr2; 
    }
     $result = cutString(["he"]);
        print_r($result);

     ?>
