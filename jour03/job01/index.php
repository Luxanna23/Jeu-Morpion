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
$tableau = array(200,204,173,98,171,404,459);
foreach ($tableau as $value) {
    if ($value%2==0){
        echo "$value est paire </br>";
    }
    else {
        echo "$value est impaire </br>";
    }
}
?>
</body>
</html>