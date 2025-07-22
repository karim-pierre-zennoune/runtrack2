<?php

function occurrences($str, $char)
{
    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $count++;
        }

    }
    return $count;
}

echo "Bonjour : o count : " . occurrences("Bonjour", "o") . "<br/>";
echo "salut : a count : " . occurrences("salut", "a") . "<br/>";
echo "LaPlateforme : a count : " . occurrences("LaPlateforme", "a") . "<br/>";
echo "abcdefg : z count : " . occurrences("abcdefg", "z") . "<br/>";


?>