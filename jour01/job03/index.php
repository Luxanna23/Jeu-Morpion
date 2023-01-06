<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>

<?php
$str = "Hello";
$int = 10;
$bool = true;
$float = 4.73;
?>

  <header>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><?php echo "Chaine de caractere" ?></td>
            <td><?php echo "str" ?></td>
            <td><?php echo $str ?></td>
        </tr>
        <tr>
            <td><?php echo "nombres entiers" ?></td>
            <td><?php echo "int" ?></td>
            <td><?php echo $int ?></td>
        </tr>
        <tr>
            <td><?php echo "nombres décimaux" ?></td>
            <td><?php echo "float" ?></td>
            <td><?php echo $float ?></td>
        </tr>
        <tr>
            <td><?php echo "booléens" ?></td>
            <td><?php echo "bool" ?></td>
            <td><?php echo $bool ?></td>
        </tr>
</table>

  </header>

</body>
</html>
