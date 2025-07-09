<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li. -->

<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($i = 0; $i < strlen($str); $i++) {
    if ($i %2 === 0) {
        echo $str[$i];
    }
}

?>