<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
        function summary($arr){
            $summa = 0;
            foreach($arr as $value){
                $summa += $value;

            }
            return $summa;
        }

        $list =[5, 7, 9] ;
        echo summary($list) . '<br>';
        echo summary([2, 5, 9]) . '<br>';
        function info(){
            $x = 0;
        }
        $x = 10;
        info();
        echo $x;

    ?> 
</body>
</html>