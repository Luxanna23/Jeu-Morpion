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
function leetSpeak($str){
    $var="";
    $i=0;
    while (isset($str[$i])){
    if ($str[$i]=="A" || $str[$i]=="a"){
        $var = $var . "4";
    }
    else if ($str[$i]=="B" || $str[$i]=="b"){
        $var = $var . "8";
    }
    else if ($str[$i]=="E" || $str[$i]=="e"){
        $var = $var . "3";
    }
    else if ($str[$i]=="G" || $str[$i]=="g"){
        $var = $var . "6";
    }
    else if ($str[$i]=="L" || $str[$i]=="l"){
        $var = $var . "1";
    }
    else if ($str[$i]=="S" || $str[$i]=="s"){
        $var = $var . "5";
    }
    else if ($str[$i]=="T" || $str[$i]=="t"){
        $var = $var . "7";
    }
    else {
        $var = $var . $str[$i];
    }
    $i++;
    }
    return $var;
}
echo leetSpeak("Bonjour Les Amis");
?> 
</body>
</html>