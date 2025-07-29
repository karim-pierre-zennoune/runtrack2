<!-- Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et

réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment. -->

<?php

session_start();
if (!isset($_SESSION["current-turn"])) {
    $_SESSION["current-turn"] = "O";
}

if (isset($_GET["reset"])) {
    $_SESSION = [];
    $_SESSION["current-turn"] = "O";
}

$tile_list = ["a1", "a2", "a3", "b1", "b2", "b3", "c1", "c2", "c3"];
$turn_count = 0;

if (isset($_GET["a1"]) && !isset($_SESSION["a1"])) {
    $_SESSION["a1"] = $_SESSION["current-turn"];
}
if (isset($_GET["a2"]) && !isset($_SESSION["a2"])) {
    $_SESSION["a2"] = $_SESSION["current-turn"];
}
if (isset($_GET["a3"]) && !isset($_SESSION["a3"])) {
    $_SESSION["a3"] = $_SESSION["current-turn"];
}
if (isset($_GET["b1"]) && !isset($_SESSION["b1"])) {
    $_SESSION["b1"] = $_SESSION["current-turn"];
}
if (isset($_GET["b2"]) && !isset($_SESSION["b2"])) {
    $_SESSION["b2"] = $_SESSION["current-turn"];
}
if (isset($_GET["b3"]) && !isset($_SESSION["b3"])) {
    $_SESSION["b3"] = $_SESSION["current-turn"];
}
if (isset($_GET["c1"]) && !isset($_SESSION["c1"])) {
    $_SESSION["c1"] = $_SESSION["current-turn"];
}
if (isset($_GET["c2"]) && !isset($_SESSION["c2"])) {
    $_SESSION["c2"] = $_SESSION["current-turn"];
}
if (isset($_GET["c3"]) && !isset($_SESSION["c3"])) {
    $_SESSION["c3"] = $_SESSION["current-turn"];
}

if ($_SESSION["current-turn"] == "X") {
    $_SESSION["current-turn"] = "O";
} else {
    $_SESSION["current-turn"] = "X";
}

foreach ($tile_list as $tile) {
    if (isset($_SESSION[$tile])) {
        $turn_count++;
    }
}

$result = checkwin();

function checkwin()
{
    if (
        isset($_SESSION["a1"]) && isset($_SESSION["a2"]) && isset($_SESSION["a3"]) &&
        $_SESSION["a1"] === $_SESSION["a2"] &&
        $_SESSION["a1"] === $_SESSION["a3"]
    ) {
        return $_SESSION["a1"];
    }

    if (
        isset($_SESSION["b1"]) && isset($_SESSION["b2"]) && isset($_SESSION["b3"]) &&
        $_SESSION["b1"] === $_SESSION["b2"] &&
        $_SESSION["b1"] === $_SESSION["b3"]
    ) {
        return $_SESSION["b1"];
    }

    if (
        isset($_SESSION["c1"]) && isset($_SESSION["c2"]) && isset($_SESSION["c3"]) &&
        $_SESSION["c1"] === $_SESSION["c2"] &&
        $_SESSION["c1"] === $_SESSION["c3"]
    ) {
        return $_SESSION["c1"];
    }

    if (
        isset($_SESSION["a1"]) && isset($_SESSION["b1"]) && isset($_SESSION["c1"]) &&
        $_SESSION["a1"] === $_SESSION["b1"] &&
        $_SESSION["a1"] === $_SESSION["c1"]
    ) {
        return $_SESSION["a1"];
    }

    if (
        isset($_SESSION["a2"]) && isset($_SESSION["b2"]) && isset($_SESSION["c2"]) &&
        $_SESSION["a2"] === $_SESSION["b2"] &&
        $_SESSION["a2"] === $_SESSION["c2"]
    ) {
        return $_SESSION["a2"];
    }

    if (
        isset($_SESSION["a3"]) && isset($_SESSION["b3"]) && isset($_SESSION["c3"]) &&
        $_SESSION["a3"] === $_SESSION["b3"] &&
        $_SESSION["a3"] === $_SESSION["c3"]
    ) {
        return $_SESSION["a3"];
    }

    if (
        isset($_SESSION["a1"]) && isset($_SESSION["b2"]) && isset($_SESSION["c3"]) &&
        $_SESSION["a1"] === $_SESSION["b2"] &&
        $_SESSION["a1"] === $_SESSION["c3"]
    ) {
        return $_SESSION["a1"];
    }

    if (
        isset($_SESSION["a3"]) && isset($_SESSION["b2"]) && isset($_SESSION["c1"]) &&
        $_SESSION["a3"] === $_SESSION["b2"] &&
        $_SESSION["a3"] === $_SESSION["c1"]
    ) {
        return $_SESSION["a3"];
    }

    return null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
    <style>
        input {
            width: 100px;
            height: 100px;
        }

        #reset {
            width: 300px;
            height: 40px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <table>
            <tr>
                <td><input type="submit" value="<?= isset($_SESSION["a1"]) ? $_SESSION["a1"] : "-" ?>" name="a1"></td>
                <td><input type="submit" value="<?= isset($_SESSION["a2"]) ? $_SESSION["a2"] : "-" ?>" name="a2"></td>
                <td><input type="submit" value="<?= isset($_SESSION["a3"]) ? $_SESSION["a3"] : "-" ?>" name="a3"></td>
            </tr>
            <tr>
                <td><input type="submit" value="<?= isset($_SESSION["b1"]) ? $_SESSION["b1"] : "-" ?>" name="b1"></td>
                <td><input type="submit" value="<?= isset($_SESSION["b2"]) ? $_SESSION["b2"] : "-" ?>" name="b2"></td>
                <td><input type="submit" value="<?= isset($_SESSION["b3"]) ? $_SESSION["b3"] : "-" ?>" name="b3"></td>
            </tr>
            <tr>
                <td><input type="submit" value="<?= isset($_SESSION["c1"]) ? $_SESSION["c1"] : "-" ?>" name="c1"></td>
                <td><input type="submit" value="<?= isset($_SESSION["c2"]) ? $_SESSION["c2"] : "-" ?>" name="c2"></td>
                <td><input type="submit" value="<?= isset($_SESSION["c3"]) ? $_SESSION["c3"] : "-" ?>" name="c3"></td>
            </tr>
        </table>
        <input id="reset" name="reset" type="submit" value="réinitialiser la partie">
    </form>
    <p>
        <?php
        if ($result) {
            echo $result . " a gagné";
            $_SESSION = [];
            $_SESSION["current-turn"] = "O";
        } else if ($turn_count === 9) {
            echo "Match nul";
            $_SESSION = [];
            $_SESSION["current-turn"] = "O";
        }
        ?>
    </p>
</body>

</html>