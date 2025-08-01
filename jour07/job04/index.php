<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->


<?php require_once("../../kpz_lib.php"); ?>
<?php

function calcule($a, $operation, $b)
{
    $symbols = ["+", "-", "*", "/", "%"];

    if (kpz_strlen($operation) != 1 || !kpz_is_numeric($a) || !kpz_is_numeric($b) || !kpz_char_in_array($operation, $symbols)) {
        return null;
    }

    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            return $a / $b;
        case "%":
            return $a % $b;
        default:
            return null;
    }
}

echo "1+64.54 = " . calcule(1, "+", 64.54) . "<br/>";
echo "5-2 = " . calcule(5, "-", 2) . "<br/>";
echo "3*5 = " . calcule(3, "*", 5) . "<br/>";
echo "6/2 = " . calcule(6, "/", 2) . "<br/>";
echo "6%2 = " . calcule(6, "%", 2) . "<br/>";
echo "q+64 = " . calcule("q", "+", 64) . "<br/>";

?>