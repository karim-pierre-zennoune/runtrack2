<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<?php require_once("../../kpz_lib.php"); ?>

<!DOCTYPE HTML>
<html>

<body>
    <form action="<?php echo kpz_htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        largeur: <input type="text" name="largeur"><br>
        hauteur: <input type="text" name="hauteur"><br>
        <input type="submit">
    </form>

    <div>
        <?php
        $len = kpz_count($_GET);
        if (
            $len == 2 && isset($_GET["largeur"]) && isset($_GET["hauteur"])
            && kpz_is_integer($_GET["largeur"]) && kpz_is_integer($_GET["hauteur"])
        ) {
            $largeur = $_GET["largeur"];
            $hauteur = $_GET["hauteur"];

            if ($largeur > 0 && $hauteur > 0) {
                make_roof($largeur, $hauteur);
                make_house($largeur, $hauteur);
            } else {
                echo "Wrong input, expecting 2 positive integers";
            }
        } else {
            echo "Wrong input, expecting 2 positive integers";
        } ?>
    </div>
</body>

</html>


<?php

function make_house($largeur, $hauteur)
{
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j === $largeur - 1 || $j === 0) {
                echo "|";
            } else if ($i === $hauteur - 1) {
                echo "_";
            } else {
                echo " ";
            }
        }
        echo "<br/>";
    }
}
function make_roof($largeur, $hauteur)
{
    for ($i = 0; $i < $largeur / 2; $i++) {
        for ($j = $largeur / 2 - $i - 1; $j > 0; $j--) {
            echo " ";
        }
        echo "/";
        for ($k = 0; $k < $i * 2; $k++) {
            echo "_";
        }
        echo "\\<br/>";
    }
}

