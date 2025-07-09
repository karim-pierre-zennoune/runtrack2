<!-- Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles. -->

<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = [ "a", "e", "i", "o", "u", "y"];

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), $vowels)) {
        echo $str[$i];
    }
}
?>