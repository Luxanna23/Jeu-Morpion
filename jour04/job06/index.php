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
        <label>Nombre</label>
        <input type="int" name="nombre">
        <input type="submit" value="Submit">
    </form>
<?php
if (isset($_GET["nombre"]) && ($_GET != null)){
        if($_GET["nombre"]%2==0){
            echo "Nombre pair.";
        }
        else {
            echo "Nombre impair.";
        }
    }
?> 
</body>
</html>