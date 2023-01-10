<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function calcule($a,$operation,$b){
        $var=0;
        if ($operation=="+"){
            $var = $a + $b;
        }
        else if ($operation=="-"){
            $var = $a - $b;
        }
        else if ($operation=="*"){
            $var = $a * $b;
        }
        else if ($operation=="/"){
            $var = $a / $b;
        }
        else if ($operation=="%"){
            $var = $a % $b;
        }
        return $a.$operation.$b."= ".$var;
}
echo calcule(10,"-",3);
?> 
</body>
</html>