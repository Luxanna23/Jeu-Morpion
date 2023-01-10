<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="submit" value="submit">
    </form>
<?php
$i=0;
foreach ($_POST as $key => $value){
        $i++;
    }
echo "“Le nombre d’argument POST envoyé est : ". $i;

?> 
</body>
</html>