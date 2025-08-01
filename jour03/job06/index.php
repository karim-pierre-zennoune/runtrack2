<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL -->

<?php

require_once("../../kpz_lib.php");

$str = "Les choses que l'on possede finissent par nous posseder.";

for ($i = kpz_strlen($str) - 1; $i >= 0; $i--) {
    echo $str[$i];
}
?>