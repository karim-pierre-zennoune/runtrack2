<!-- Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles. -->

<?php

function kpz_char_in_array($char, $array)
{
    $i = 0;
    while (isset($array[$i])) {
        if ($char == $array[$i]) {
            return true;
        }
        $i++;
    }
    return false;
}

$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = ["a", "e", "i", "o", "u", "y"];

for ($i = 0; $i < strlen($str); $i++) {
    if (kpz_char_in_array(strtolower($str[$i]), $vowels)) {
        echo $str[$i];
    }
}
?>