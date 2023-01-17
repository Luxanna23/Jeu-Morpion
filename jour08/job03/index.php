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
        <input type="text" name="prenom">
        <input type="submit" value="Submit">
    </form>
    <?php
    session_start();

    if (isset($_GET["prenom"]) != "") {
        $_SESSION["prenom"][] = $_GET["prenom"];
    }

    if (isset($_POST["reset"])) {
        vider();
    }

    function vider(){
        $_SESSION["prenom"] = [];
        session_destroy();
    }
    if (isset($_SESSION["prenom"])) {
        foreach ($_SESSION["prenom"] as $value) {
            echo $value . "</br>";
        }
    }
    ?>
    <form action="" method="POST" vider()>
        <input type="submit" value="reset" name="reset">
    </form>
</body>

</html>