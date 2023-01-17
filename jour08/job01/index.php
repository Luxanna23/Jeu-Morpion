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
    
    session_start();
    if (isset($_SESSION["nbvisites"])){
        $_SESSION["nbvisites"] += 1;
    }
    else {
        $_SESSION["nbvisites"] = 0;
    }

    if (isset($_POST["reset"])){
        vider();
    }

    function vider(){
            session_unset();
            session_destroy();
            header('Location: index.php');
        }   
    echo $_SESSION["nbvisites"];
    ?>
    <form action="" method="POST" vider()>
        <input type="submit" value="reset" name="reset">
    </form>
</body>

</html>