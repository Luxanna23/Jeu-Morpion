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
        border-collapse: collapse;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 3%;
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
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <button type="submit" value="" id="case1" name="case1">
                        <?php
                        CreationCookie("case1");
                        ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" name="case2">
                        <?php
                        CreationCookie("case2"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" name="case3">
                        <?php
                        CreationCookie("case3"); ?>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" value="" name="case4">
                        <?php
                        CreationCookie("case4"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" name="case5">
                        <?php
                        CreationCookie("case5"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" name="case6">
                        <?php
                        CreationCookie("case6"); ?>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" value="" name="case7">
                        <?php
                        CreationCookie("case7"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" name="case8">
                        <?php
                        CreationCookie("case8"); ?>
                    </button>
                </td>
                <td>
                    <button type="submit" value="" name="case9">
                        <?php
                        CreationCookie("case9") ?>
                    </button>
                </td>
            </tr>
        </table>
    </form>

    <?php

    function CreationCookie($case)
    {   $i= $_COOKIE["tour"];
        if (isset($_POST["$case"]) && $_POST["$case"] == "") {
            setcookie($case, $case, time() + 3600);
            $i++;
            setcookie("tour", $i, time() + 3600);
            echo aQuiLeTour($_COOKIE["tour"]);
        }
        //win();
    }

    function aQuiLeTour($tour)
    {
        if ($tour % 2 == 0) {
            $symbole = "X";
        } else {
            $symbole = "O";
        }
        echo $symbole;
    }

    function desacBoutton($case){
        if (isset($_COOKIE[$case])){ "disabled"; }
    }

    function win()
    {
        // LES POSSIBILITE DE GAGNER POUR "X" if ()
        if (isset($_COOKIE["case1"]) && isset($_COOKIE["case2"]) && isset($_COOKIE["case3"]) && $_COOKIE["case1"] == "X" && $_COOKIE["case1"] == $_COOKIE["case2"] && $_COOKIE["case2"] == $_COOKIE["case3"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case4"]) && isset($_COOKIE["case7"]) && $_COOKIE["case1"] == "X" && $_COOKIE["case1"] == $_COOKIE["case4"] && $_COOKIE["case4"] == $_COOKIE["case7"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case2"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case8"]) && $_COOKIE["case2"] == "X" && $_COOKIE["case2"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case8"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case3"]) && isset($_COOKIE["case6"]) && isset($_COOKIE["case9"]) && $_COOKIE["case3"] == "X" && $_COOKIE["case3"] == $_COOKIE["case6"] && $_COOKIE["case6"] == $_COOKIE["case9"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case4"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case6"]) && $_COOKIE["case4"] == "X" && $_COOKIE["case4"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case6"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"]) && $_COOKIE["case7"] == "X" && $_COOKIE["case7"] == $_COOKIE["case8"] && $_COOKIE["case8"] == $_COOKIE["case9"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case9"]) && $_COOKIE["case1"] == "X" && $_COOKIE["case1"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case9"]) {
            echo "Joueur 1 a gagné la partie!";
        } else if (isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"]) && $_COOKIE["case3"] == "X" && $_COOKIE["case3"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case7"]) {
            echo "Joueur 1 a gagné la partie!";
        }

        // LES POSSIBILITE DE GAGNER POUR "O"

        else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case2"]) && isset($_COOKIE["case3"]) && $_COOKIE["case1"] == "O" && $_COOKIE["case1"] == $_COOKIE["case2"] && $_COOKIE["case2"] == $_COOKIE["case3"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case4"]) && isset($_COOKIE["case7"]) && $_COOKIE["case1"] == "O" && $_COOKIE["case1"] == $_COOKIE["case4"] && $_COOKIE["case4"] == $_COOKIE["case7"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case2"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case8"]) && $_COOKIE["case2"] == "O" && $_COOKIE["case2"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case8"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case3"]) && isset($_COOKIE["case6"]) && isset($_COOKIE["case9"]) && $_COOKIE["case3"] == "O" && $_COOKIE["case3"] == $_COOKIE["case6"] && $_COOKIE["case6"] == $_COOKIE["case9"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case4"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case6"]) && $_COOKIE["case4"] == "O" && $_COOKIE["case4"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case6"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"]) && $_COOKIE["case7"] == "O" && $_COOKIE["case7"] == $_COOKIE["case8"] && $_COOKIE["case8"] == $_COOKIE["case9"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case9"]) && $_COOKIE["case1"] == "O" && $_COOKIE["case1"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case9"]) {
            echo "Joueur 2 a gagné la partie!";
        } else if (isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"]) && $_COOKIE["case3"] == "O" && $_COOKIE["case3"] == $_COOKIE["case5"] && $_COOKIE["case5"] == $_COOKIE["case7"]) {
            echo "Joueur 2 a gagné la partie!";
        }

        // MATCH NULL 

        else if (isset($_COOKIE["case1"]) && isset($_COOKIE["case2"]) && isset($_COOKIE["case3"]) && isset($_COOKIE["case4"]) && isset($_COOKIE["case5"]) && isset($_COOKIE["case6"]) && isset($_COOKIE["case7"]) && isset($_COOKIE["case8"]) && isset($_COOKIE["case9"])){
            echo "Match nul, aucun joueur n'a gagné la partie!";
        }
    }

    if (isset($_POST["end"])) {
        session_destroy();
        setcookie("case1", "", time() - 3600);
        setcookie("case2", "", time() - 3600);
        setcookie("case3", "", time() - 3600);
        setcookie("case4", "", time() - 3600);
        setcookie("case5", "", time() - 3600);
        setcookie("case6", "", time() - 3600);
        setcookie("case7", "", time() - 3600);
        setcookie("case8", "", time() - 3600);
        setcookie("case9", "", time() - 3600);
        setcookie("tour", 0, time() + 3600);
        // header("Refresh:0");
    }

    ?>
    <form action="" method="POST">
        <input type="submit" value="Réinitialiser la partie" name="end">
    </form>
</body>

</html>