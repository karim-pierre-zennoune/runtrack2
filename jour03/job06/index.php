<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL -->

<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

for ($i = strlen($str) - 1; $i >= 0; $i--)
{       
    echo mb_substr($str, $i, 1, 'UTF-8');
}
?>