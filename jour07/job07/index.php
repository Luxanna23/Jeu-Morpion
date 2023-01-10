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
        <input type="text" name="str">
        <select name="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    <?php

    $str = isset($_GET['str']) ? $_GET['str'] : null;

    function gras($str)
    {
        $var = isset($_GET['fonction']) ? $_GET['fonction'] : null;
        $tableauMaj = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        if ($var == "gras") {
            $i = 0;
            while (isset($tableauMaj[$i])) {
                if ($tableauMaj[$i] == $str[0]) {
                    $str =  "<b>" . $str . "</b>";
                }
                $i++;
            }
            return $str;
        }
    }
    echo gras($str);

    function cesar($str, $decalage=2)
    {
        $var = isset($_GET['fonction']) ? $_GET['fonction'] : null;
        if ($var == "cesar") {
            $tableauMaj = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
            $tableauMin = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
            $i = 0;
            while (isset($str[$i])) {
                $j = 0;
                while (isset($tableauMaj[$j])) {
                    if ($str[$i] == $tableauMaj[$j]) {
                        if (($j + $decalage) > 25){
                            $str[$i] = $tableauMaj[$j + $decalage - 25];
                            echo $str[$i];
                        }
                        
                    }
                    $j++;
                }
                $j = 0;
                while (isset($tableauMin[$j])) {
                    if ($str[$i] == $tableauMin[$j]) {
                        if (($j + $decalage) > 25){
                        $str[$i] = $tableauMin[$j + $decalage - 25];
                        echo $str[$i];
                        }
                    }
                    $j++;
                }
                $i++;
            }
        }
    }

    function plateforme($str)
    {
        $var = isset($_GET['fonction']) ? $_GET['fonction'] : null;
        if ($var == "plateforme") {
            $car = "";
            $i = 0;
            while (isset($str[$i])) {
                if ($str[$i] == "m" && $str[$i + 1] == "e") {
                    $str = $str . "_";
                }
                $i++;
            }
            return $str;
        }
    }
    echo plateforme($str);
    // la liste deroulante

    if (isset($_GET["fonction"]) && ($_GET != null)) {
        if ($_GET["fonction"] == "gras") {
            gras($_GET['str']);
        } else if ($_GET["fonction"] == "cesar") {
            cesar($_GET['str']);
        } else if ($_GET["fonction"] == "plateforme") {
            plateforme($_GET['str']);
        }
    }
    ?>
</body>

</html>