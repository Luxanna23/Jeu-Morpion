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

$str="Certaines choses changent, et d'autres ne changeront jamais.";

$str2= "";
for ($i=0;isset($str[$i]);$i++){
    if ($i>0) {
        echo $str[$i];
    }
}
echo $str[0];

?> 
</body>
</html>