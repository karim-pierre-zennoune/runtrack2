<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->

<?php

function calcule($a, $operation, $b)
{
    $symbols = ["+", "-", "*", "/", "%"];

    if (!is_numeric($a) || !is_numeric($b) || !in_array($operation, $symbols)) {
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

echo "1+64 = " . calcule(1, "+", 64) . "<br/>";
echo "5-2 = " . calcule(5, "-", 2) . "<br/>";
echo "3*5 = " . calcule(3, "*", 5) . "<br/>";
echo "6/2 = " . calcule(6, "/", 2) . "<br/>";
echo "6%2 = " . calcule(6, "%", 2) . "<br/>";
echo "q+64 = " . calcule("q", "+", 64) . "<br/>";

?>