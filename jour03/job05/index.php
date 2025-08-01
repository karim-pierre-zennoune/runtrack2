<!-- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”.. -->



<?php

require_once("../../kpz_lib.php");

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$vowels = ["a", "e", "i", "o", "u", "y"];
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$vowel_count = 0;
$conso_count = 0;

for ($i = 0; $i < kpz_strlen($str); $i++) {
    if (kpz_char_in_array(kpz_strtolower($str[$i]), $vowels)) {
        $dic["voyelles"]++;
    } else
        $dic["consonnes"]++;
}
?>

<table>
    <tr>
        <th>Consonnes</th>
        <th>Voyelles</th>

    </tr>
    <tr>
        <td> <?= $dic["consonnes"] ?></td>
        <td> <?= $dic["voyelles"] ?> </td>
    </tr>


</table>