<?php
$mysqli=new mysqli("localhost", "root", "", "jour09");
if( $mysqli->connect_error ) {
    echo "erreur de connexion a MySQL:" .$mysqli -> connect_error;
    exit();
}
$request=$mysqli->query("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles INNER JOIN etage ON id_etage=etage.id");
$result=$request->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table >
    <thead >
        <tr >
            <?php foreach($result[0] as $key=> $value): ?>
                <th >
                    <?= $key ?>
                </th>
                <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0; $i < sizeof($result); $i++):?>
       <tr >
       <td><?=$result[$i]["nom_salle"]?></td>
       <td><?=$result[$i]["nom_etage"]?></td>
       </tr>
       <?php endfor; ?>
    </tbody>
</table>  
</body>
</html>
