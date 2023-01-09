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
        $i=0;
        for ($i=0; $i<=100;$i++){
            if ($i<=20) {
                echo "<i>$i</i>" ; ?>  </br>
        <?php 
        }
            else if ($i>=20 && $i<=25){
                echo "<u>$i</u>" ; ?>  </br>
        <?php
        }
            else if ($i==42){
                echo "La Plateforme" ; ?> </br>
        <?php
        }
            else {
                echo $i ; ?> </br>
        <?php
            }
        } ?> </br>
        
</body>
</html>