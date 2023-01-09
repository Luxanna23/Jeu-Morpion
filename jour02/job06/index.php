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
    $largeur=10;
    $hauteur=20;
        for ($i=0; $i<=$largeur;$i++){ 
            echo "_"; // le trait du haut de la largeur 
        } ?> </br>
        <?php 
        for ($i=0; $i<=$hauteur;$i++){ 
            echo "|"; // on met les "|" au debut

            for ($j=0; $j<=$largeur;$j++){
                echo "&nbsp" . "&nbsp"; //les espaces 2 fois car le "_" est plus grand que l'espace du coup c'est moche
            }
            echo "|</br>";
        } 
        for ($i=0; $i<=$largeur;$i++){ 
            echo "_"; // le trait du bas de la largeur 
        } ?> </br>
        
</body>
</html>