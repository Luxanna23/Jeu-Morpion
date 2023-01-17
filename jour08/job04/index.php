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
    if (isset($_POST["connexion"])) {
        setcookie("prenom", $_POST["prenom"], time() + 3600);
        header("Refresh:0");
    } else  if (isset($_POST["deco"])) {
        //unset($_COOKIE["prenom"]);
        setcookie("prenom", "", time() - 3600);
        header("Refresh:0");
    }

    if (!isset($_COOKIE["prenom"])) { ?>
        <form action="index.php" method="POST">
            <label>Prenom : </label>
            <input type="text" name="prenom">
            <input type="submit" value="Connexion" name="connexion">
        </form>
    <?php   } else {
        echo " Bonjour " . $_COOKIE["prenom"] . " !"; ?>
        <form action="" method="POST">
            <input type="submit" value="Déconnexion" name="deco">
        </form>
    <?php } ?>

</body>

</html>