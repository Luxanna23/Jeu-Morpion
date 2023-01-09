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
    $nombre=1000;
        for ($i=2; $i<=1000;$i++){ //on commence par 2 pck 1 se divise par tout 
            for ($j=2; $j<$i;$j++){
                if ($i % $j==0){ 
                    break; }
                else if ($j==($i-1)){
                    echo "$i</br>" ; }
            }
        } 
    ?>
        
</body>
</html>