<?php
$mysqli=new mysqli("localhost", "root", "", "jour09");
if( $mysqli->connect_error ) {
    echo "erreur de connexion a MySQL:" .$mysqli -> connect_error;
    exit();
}
$request=$mysqli->query("SELECT * FROM salles ORDER BY `capacite` DESC");
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
       <td><?=$result[$i]["id"]?></td>
       <td><?=$result[$i]["nom"]?></td>
       <td><?=$result[$i]["id_etage"]?></td>
       <td><?=$result[$i]["capacite"]?></td>
       </tr>
       <?php endfor; ?>
    </tbody>
</table>  
</body>
</html>