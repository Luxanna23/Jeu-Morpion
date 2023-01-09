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
   $hauteur=5;
    for ($i=0 ; $i<$hauteur; $i++) { 
        for ($j = 0; $j <= $hauteur-$i; $j++) {
            echo "&nbsp";  
        }      
    echo "/"; 
    for ($j=0; $j<=$i+$i; $j++) {
        echo "&nbsp"; 
    }
    echo "\\</br>"; 
   } 
    // le trait du bas de la largeur 
    for ($i=0; $i<$hauteur;$i++){ 
        echo "_"; 
    } 
    ?> </br>

</body>
</html>