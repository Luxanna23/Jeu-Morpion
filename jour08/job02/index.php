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
    setcookie("nbvisites", "0", time() + 3600);

    if (isset($_COOKIE['nbvisites'])) {
        setcookie("nbvisites", $_COOKIE['nbvisites'] + 1, time() + 3600);
    } 
    else {
        setcookie("nbvisites", 0, time() + 3600);
    }

    if (isset($_POST["reset"])) {
        vider();
    }
    function vider()
    {
        setcookie("nbvisites", 0, time() + 3600);
        header('Location: index.php');
    }
    echo $_COOKIE['nbvisites'];
    ?>
    <form action="" method="POST">
        <input type="submit" value="reset" name="reset">
    </form>
</body>

</html>