<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c -->

<?php

require_once("../../kpz_lib.php");

$str = "Certaines choses changent, et d'autres ne changeront jamais.";


$str = kpz_substr($str, 1, kpz_strlen($str) - 1) . $str[0];
$str[0] = kpz_strtoupper($str[0]);
$str[kpz_strlen($str) - 1] = kpz_strtolower($str[kpz_strlen($str) - 1]);

echo $str;


?>