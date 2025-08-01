<!-- Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php require_once("../../kpz_lib.php"); ?>

<?php
function leetSpeak($str)
{
    for ($i = 0; $i < kpz_strlen($str); $i++) {
        switch ($str[$i]) {
            case "a":
            case "A":
                $str[$i] = "4";
                break;
            case "b":
            case "B":
                $str[$i] = "8";
                break;
            case "e":
            case "E":
                $str[$i] = "3";
                break;
            case "g":
            case "G":
                $str[$i] = "6";
                break;
            case "l":
            case "L":
                $str[$i] = "1";
                break;
            case "s":
            case "S":
                $str[$i] = "5";
                break;
            case "t":
            case "T":
                $str[$i] = "7";
                break;
            default:
                break;
        }
    }
    return $str;
}

echo "leetSpeak => " . leetSpeak("leetSpeak") . "<br/>";
echo "Bonjour => " . leetSpeak("Bonjour") . "<br/>";

?>