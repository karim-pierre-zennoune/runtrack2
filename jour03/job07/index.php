<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c -->

<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";


$str = substr($str,1,strlen($str)-1) . $str[0];
$str[0] = strtoupper($str[0]);
$str[strlen($str)-1] = strtolower($str[strlen($str)-1]);

echo $str;


?>