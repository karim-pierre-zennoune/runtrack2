<!-- Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”. -->

<?php require_once("../../kpz_lib.php"); ?>

<!DOCTYPE html>
<html>

<body>
    <form action="<?php echo kpz_htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get ">
        str <input type="text" name="str" autofocus>
        <br />
        fonction<select id="fonction" name="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
            <option value="none">none</option>
        </select>
        <input type="submit">
    </form>

    <div>
        <?php
        if (isset($_GET["fonction"]) && isset($_GET["str"])) {
            switch ($_GET["fonction"]) {
                case "gras":
                    echo gras(kpz_htmlspecialchars($_GET["str"]));
                    break;
                case "cesar":
                    echo cesar(kpz_htmlspecialchars($_GET["str"]));
                    break;
                case "plateforme":
                    echo plateforme(kpz_htmlspecialchars($_GET["str"]));
                    break;
                case "none":
                default:
                    echo kpz_htmlspecialchars($_GET["str"]);
                    break;
            }


        } ?>
    </div>
</body>

</html>







<?php

function gras($str)
{
    $array = kpz_explode(" ", $str);
    $newarray = [];

    foreach ($array as $val) {
        if (isset($val[0]) && $val[0] >= "A" && $val[0] <= "Z") {
            $newarray[] = "<b>" . $val . "</b>";
        } else {
            $newarray[] = $val;
        }
    }
    return kpz_implode(" ", $newarray);
}


function cesar($str, $decalage = 2)
{

    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < kpz_strlen($str); $i++) {
        if ($str[$i] >= "a" && $str[$i] <= "z") {
            $index = kpz_index_of($str[$i], $alphabet);
            $str[$i] = $alphabet[($index + $decalage) % 26];
        }

        if ($str[$i] >= "A" && $str[$i] <= "Z") {
            //A = 65
            $index = kpz_index_of(kpz_strtolower($str[$i]), $alphabet);
            $str[$i] = kpz_strtoupper($alphabet[($index + $decalage) % 26]);
        }
    }
    return $str;
}


function plateforme($str)
{
    $array = kpz_explode(" ", $str);
    $newarray = [];

    foreach ($array as $val) {
        $len = kpz_strlen($val);

        if ($len >= 2 && $val[$len - 1] == "e" && $val[$len - 2] == "m") {
            $newarray[] = $val . "_";
        } else {
            $newarray[] = $val;
        }
    }
    return kpz_implode(" ", $newarray);
}


?>