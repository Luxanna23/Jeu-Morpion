<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style type="text/css">
* {
  border : 2px solid black;
}
</style>
<?php

$str="On n’est pas le meilleur quand on le croit mais quand on le sait";
$i=0;
$j=0;
$k=0;
$array = array("Consonnes" => $i, "Voyelles" => $j,);

while (isset($str[$k])){
    if ($str[$k]=="a" || $str[$k]=="o" || $str[$k]=="u" || $str[$k]=="i" || $str[$k]=="y" || $str[$k]=="e" || $str[$k]=="O"){
        $i++;
    }
    else {
        $j++;
    }
    $k++;
}

?> 
<table>
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $j ?></td>
        </tr>
</table>
</body>
</html>