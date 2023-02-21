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
try{                  
    $db = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');
}
catch(Exception $e){
	//è_ en cas d'erreur on affiche le message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$sql1 = 'SELECT * FROM salles';
$sqlStatement = $db->prepare($sql1);
$sqlStatement->execute();
$sql = $sqlStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($sql as $sqll) {
?>

    <table>
        <tr>
        <thead>
        <tr>
            <th colspan="2">nom</th>
            <th colspan="2">capacite</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $sqll['nom']; ?></td>
            <td><?php echo $sqll['capacite']; ?></td>
        </tr> 
    </tbody>
    </table>
<?php } ?>  
</body>

</html>