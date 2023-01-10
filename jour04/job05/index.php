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
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="text" name="password">
        <input type="submit" value="Submit">
    </form>
<?php
if (isset($_POST["username"]) && isset($_POST["password"]) && ($_POST != null)){
    //foreach ($_POST as $key => $value){
        if($_POST["username"]=="john" && $_POST["password"]=="rambo"){
            echo "C’est pas ma guerre.";
        }
        else {
            echo "Votre pire cauchemar.";
        }
    }
//}
?> 
</body>
</html>