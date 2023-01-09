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

$str="I'm sorry Dave I'm afraid I can't do that";
$i=0;
while (isset($str[$i])){
    if ($str[$i]=="a" || $str[$i]=="o" || $str[$i]=="u" || $str[$i]=="i" || $str[$i]=="y" || $str[$i]=="e" || $str[$i]=="I"){
        echo $str[$i];
    }
    $i++;
}

?> 
</body>
</html>