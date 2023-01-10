<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label>Largeur</label>
        <input type="int" name="largeur">
        <label>Hauteur</label>
        <input type="int" name="hauteur">
        <input type="submit" value="Submit">
    </form>
<?php
if (isset($_GET["largeur"]) && (isset($_GET["hauteur"]) && ($_GET != null))){
    //Le triangle
    for ($i=0 ; $i<$_GET["hauteur"]; $i++) { 
        for ($j = 0; $j < $_GET["hauteur"]-$i; $j++) {
            echo "&nbsp" . "&nbsp";  
        }      
    echo "/"; 
    for ($j=0; $j<$i+$i; $j++) { // le trait du bas de la largeur 
        echo "_"; 
    }
    echo "\\</br>";
   } 
    // Le rectangle
    for ($i=0; $i<$_GET["hauteur"];$i++){ 
        echo "|"; // on met les "|" au debut

        for ($j=0; $j<$_GET["largeur"];$j++){
            echo "&nbsp" . "&nbsp"; //les espaces 2 fois car le "_" est plus grand que l'espace du coup c'est moche
        }
        echo "|</br>";
    } 
    for ($i=0; $i<$_GET["largeur"];$i++){ 
        echo "_"; // le trait du bas de la largeur 
    } 
}?> </br>

</body>
</html>