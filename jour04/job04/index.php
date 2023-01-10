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
        <label>Prenom</label>
        <input type="text" name="prenom">
        <label>Nom</label>
        <input type="text" name="nom">
        <input type="submit" value="submit">
    </form>

<table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <?php
        foreach ($_POST as $key => $value){
        ?> 
        <tr>
            <td><?php echo $key ?></td> 
            <td><?php echo $value."<br>"?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>