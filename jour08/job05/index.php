<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
</head>
<style>
    body {
        background-color: #0C0318;
        background-image: url(https://wallpaperaccess.com/full/1261770.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }

    h1 {
        color: rgb(158, 82, 255);
        text-shadow: 0.1em 0.1em 0.2em black;
        text-decoration: underline;
        font-size: 300%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    h2 {
        color: rgb(250, 228, 255);
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 200%;
        font-family: cursive;
    }

    p {
        color: black;
        font-family: cursive;
        text-shadow: grey 0.1em 0.1em 0.2em;
        margin-bottom: 3%;
    }

    table {
        width: 300px;
        height: 300px;
        border-collapse: collapse;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 3%;
    }

    tr {
        width: 350px;
        height: 100px;
    }

    th,
    td {
        border: 2px solid black;
        padding: 10px;
    }

    input[type=submit] {
        font-size: medium;
        background-color: #6E0DE8;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }

    button[type=submit] {
        font-size: 200%;
        background-color: transparent;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

<body>
    <?php
    session_start();

    if (!isset($_COOKIE["tour"])){
        setcookie("tour", 0, time() + 3600);
    }
    ?>

    <h1>Morpion</h1>
    <h2>Regles du jeu</h2>
    <p>Pour jouer au morpion il faut être à deux.</br>
        - Le joueur 1 jouera les "X".</br>
        - Le joueur 2 jouera les "O".</br>
        Chaque joueur va à tour de rôle cocher l'une des 9 cases de la grille. </br>
        Le premier à aligner trois symboles identiques horizontalement, verticalement ou en diagonale gagne la partie.</p>
    
    <?php

    function CreationCookie($case)
    {   
        if (isset($_POST["$case"]) && $_POST["$case"] == "") {
            $x= aQuiLeTour($_COOKIE["tour"]);
            setcookie($case, $x, time() + 3600);
            
            setcookie("tour", $_COOKIE["tour"] += 1, time() + 3600);
            
            //echo aQuiLeTour($_COOKIE["tour"]);
            //header("Refresh:0");
        }
    }
    function affichage($case) { // on affiche dans la case le symbole
        if(isset($_COOKIE[$case])) echo $_COOKIE[$case]; }

    CreationCookie("case1");
    CreationCookie("case2");
    CreationCookie("case3");
    CreationCookie("case4");
    CreationCookie("case5");
    CreationCookie("case6");
    CreationCookie("case7");
    CreationCookie("case8");
    CreationCookie("case9");

    function aQuiLeTour($tour)
    {
        if ($tour % 2 == 0) {
            $symbole = "X";
            header("Refresh:0");
        } else {
            $symbole = "O";
            header("Refresh:0");
        }
        return $symbole;
    }

    function win()
    {
        // LES POSSIBILITE DE GAGNER POUR "X" if ()
        if (isset($_COOKIE["case1"]) && isset($_COOKIE["case2"]) && isset($_COOKIE["case3"]) && $_COOKIE["case1"] == "X" && $_COOKIE["case1"] == $_COOKIE["case2"] && $_COOKIE["case2"] == $_COOKIE["case3"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case4"]) && isset($_COOKIE["case7"]) && $_COOKIE["case1"] == "X" && $_COOKIE["case1"] == $_COOKIE["case4"] && $_COOKIE["case4"] == $_COOKIE["case7"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case2"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case8"]) && $_COOKIE["case2"] == "X" && $_COOKIE["case2"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case8"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case3"]) && isset($_COOKIE["case6"]) && isset($_COOKIE["case9"]) && $_COOKIE["case3"] == "X" && $_COOKIE["case3"] == $_COOKIE["case6"] && $_COOKIE["case6"] == $_COOKIE["case9"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case4"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case6"]) && $_COOKIE["case4"] == "X" && $_COOKIE["case4"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case6"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"]) && $_COOKIE["case7"] == "X" && $_COOKIE["case7"] == $_COOKIE["case8"] && $_COOKIE["case8"] == $_COOKIE["case9"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case9"]) && $_COOKIE["case1"] == "X" && $_COOKIE["case1"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case9"]) {
            return "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case3"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case7"]) && $_COOKIE["case3"] == "X" && $_COOKIE["case3"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case7"]) {
            return "Joueur 1 a gagné la partie!";
        }

        // LES POSSIBILITE DE GAGNER POUR "O"

        else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case2"]) && isset($_COOKIE["case3"]) && $_COOKIE["case1"] == "O" && $_COOKIE["case1"] == $_COOKIE["case2"] && $_COOKIE["case2"] == $_COOKIE["case3"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case4"]) && isset($_COOKIE["case7"]) && $_COOKIE["case1"] == "O" && $_COOKIE["case1"] == $_COOKIE["case4"] && $_COOKIE["case4"] == $_COOKIE["case7"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case2"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case8"]) && $_COOKIE["case2"] == "O" && $_COOKIE["case2"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case8"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case3"]) && isset($_COOKIE["case6"]) && isset($_COOKIE["case9"]) && $_COOKIE["case3"] == "O" && $_COOKIE["case3"] == $_COOKIE["case6"] && $_COOKIE["case6"] == $_COOKIE["case9"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case4"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case6"]) && $_COOKIE["case4"] == "O" && $_COOKIE["case4"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case6"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"]) && $_COOKIE["case7"] == "O" && $_COOKIE["case7"] == $_COOKIE["case8"] && $_COOKIE["case8"] == $_COOKIE["case9"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case9"]) && $_COOKIE["case1"] == "O" && $_COOKIE["case1"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case9"]) {
            return "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case3"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case7"]) && $_COOKIE["case3"] == "O" && $_COOKIE["case3"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case7"]) {
            return "Joueur 2 a gagné la partie!";
        }

        // MATCH NULL 

        else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case2"]) && isset($_COOKIE["case3"]) && isset($_COOKIE["case4"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case6"]) && isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"])){
            return "Match nul, aucun joueur n'a gagné la partie!";
        }
    }

    function desactiver($case) { // on desactive le bouton 
        if(isset($_COOKIE[$case]) || (win() == true)) echo "disabled";
    }

    if (isset($_POST["end"])) {
        foreach ($_COOKIE as $key => $value ){
            unset($_COOKIE[$key]);
            setcookie($key, "", time() - 3600);
        }
        setcookie("tour", 0, time() + 3600);
        header("Refresh:0");
    }
    ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <button type="submit" value="" <?php desactiver("case1"); ?> name="case1">
                        <?php
                        affichage("case1");
                        ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" <?php desactiver("case2"); ?> name="case2">
                        <?php
                        affichage("case2"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" <?php desactiver("case3"); ?> name="case3">
                        <?php
                        affichage("case3"); ?>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" value="" <?php desactiver("case4"); ?> name="case4">
                        <?php
                        affichage("case4"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" <?php desactiver("case5"); ?> name="case5">
                        <?php
                        affichage("case5"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" <?php desactiver("case6"); ?> name="case6">
                        <?php
                        affichage("case6"); ?>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" value="" <?php desactiver("case7"); ?> name="case7">
                        <?php
                        affichage("case7"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" <?php desactiver("case8"); ?> name="case8">
                        <?php
                        affichage("case8"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" <?php desactiver("case9"); ?> name="case9">
                        <?php
                        affichage("case9") ?>
                    </button>
                </td>
            </tr>
        </table>
    </form>

    <h2><?php echo win() ?></h2>
    <form action="" method="POST">
        <input type="submit" value="Réinitialiser la partie" name="end">
    </form>
</body>

</html>