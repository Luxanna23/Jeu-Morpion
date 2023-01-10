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
function occurrences($str, $char){
    $var=0;
    $i=0;
    while (isset($str[$i])){
    if ($str[$i]==$char){
        $var++;
    }
    $i++;
    }
    return $var;
}
echo occurrences("bonjour","o");
?> 
</body>
</html>