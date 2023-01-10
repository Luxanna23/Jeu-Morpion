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
        <select name="style">
            <option value="style1">style 1</option>
            <option value="style2">style 2</option>
            <option value="style3">style 3</option>
        </select>
        <input type="submit" value="Submit">
    </form>
<?php
if (isset($_GET["style"]) && ($_GET != null)){
    if ($_GET["style"]=="style1"){ ?>
    <link rel="stylesheet" href="style1.css" />
    <?php
    }
    else if ($_GET["style"]=="style2"){ ?>
    <link rel="stylesheet" href="style2.css" />
    <?php
    }
    else if ($_GET["style"]=="style3"){ ?>
    <link rel="stylesheet" href="style3.css" />
    <?php
    }
}
?> 
</body>
</html>