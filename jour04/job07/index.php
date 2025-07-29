<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<!DOCTYPE HTML>
<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        largeur: <input type="text" name="largeur"><br>
        hauteur: <input type="text" name="hauteur"><br>
        <input type="submit">
    </form>

    <div>
        <?php
        $len = count($_GET);
        if (
            $len == 2 && isset($_GET["largeur"]) && isset($_GET["hauteur"])
            && is_numeric($_GET["largeur"]) && is_numeric($_GET["hauteur"])
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

// function make_roof($largeur, $hauteur)
// {
//     for ($i = 0; $i < $hauteur; $i++):
//         for ($j = ($largeur / 2) - $i - 1; $j > 0; $j--):
//             echo " ";
//         endfor;
//         echo "/";
//         echo str_repeat("_", $i * 2);
//         echo "\\ <br/>";

//     endfor;
// }

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
    for ($i = 0; $i < $hauteur; $i++):

        if ($largeur > $hauteur * 2) {

            for ($l = 0; $l < ($largeur / 4 + $largeur % 4); $l++) {
                if ($i === $hauteur - 1) {
                    echo "_";
                } else {

                    echo " ";
                }
            }


        }
        for ($j = $hauteur - $i; $j > 1; $j--):
            echo " ";
        endfor;
        echo "/";
        for ($k = $i * 2; $k > 0; $k--):
            // if ($i === $hauteur - 1):
            echo "_";
            // else:
            //     echo " ";
            // endif;
        endfor;

        echo "\\";
        if ($largeur > $hauteur * 2) {
            for ($l = 0; $l < ($largeur / 4 + $largeur % 4); $l++) {
                if ($i === $hauteur - 1) {
                    echo "_";
                }
                // else {

                //     echo "9";
                // }
            }
        }


        echo "<br/>";
    endfor;
}








?>