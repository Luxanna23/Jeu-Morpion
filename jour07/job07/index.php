<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="str">
        <select name="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    <?php

    // var_dump($_GET);

    // $str = condition       ? valeur si vrai : valeur si faux
    $str = isset($_GET['str']) ? $_GET['str'] : null; // POURQUOI NULL MARCHE ET PAS "" ALORS QUE C PLUS LOGIQUE??
     
    $tableauMaj = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $tableauMin = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    

    function gras($str){
        $i = 0;
        // on parcourt les maj
        while (isset($tableauMaj[$i])) {

            if ($tableauMaj[$i] == $str[0]) {
                $str =  "<b>" . $str . "</b>";
            }
            $i++;
        }
        return $str;
    }

    function cesar($str, $decalage = 2){
        $res = "";
        $i = 0;
        // on parcourt str
        while (isset($str[$i])) {
            $j = 0;
            // on parcourt l'alphabet
            while (isset($tableauMaj[$j], $tableauMin[$j])) {
                // gestion dépassement de 26
                $decalageMod = ($j + $decalage) % 26;
                // assigne la lettre correspondant en fonction de la casse
                if ($str[$i] === $tableauMaj[$j])  $res = $res .  $tableauMaj[$decalageMod];
                else if ($str[$i] === $tableauMin[$j])  $res = $res .  $tableauMin[$decalageMod];
                $j++;
            }
            $i++;
        }
        return $res;
    }

    function plateforme($str){
        $i = 0;
        // Tq on est dans le mot on incrémente i (nb lettres)
        while (isset($str[$i])) {
            $i++;
        }

        // Si dernier = e et avant-dernier = m, ajouter "_"
        if ($str[$i - 1] == "e" && $str[$i - 2] == "m") {
            $str = $str . "_";
        }
        return $str;
    }

    //tests
    echo gras("Gras") . "</br>";
    echo gras("pas gras") . "</br>";
    echo cesar("abcdef") . "</br>";
    echo plateforme("Test") . "</br>";
    echo plateforme("Testme") . "</br>";

    // la liste deroulante
    if (isset($_GET["fonction"])) {
        switch ($_GET["fonction"]) {
            case  "gras":
                gras($_GET['str']);
                break;
            case "cesar":
                cesar($_GET['str']);
                break;
            case "plateforme":
                plateforme($_GET['str']);
                break;
            default:
                break;
        }
    }
    ?>
</body>

</html>