<?php



function kpz_strtolower($char)
{
    $tabtolow =
        [
            "A" => "a",
            "B" => "b",
            "C" => "c",
            "D" => "d",
            "E" => "e",
            "F" => "f",
            "G" => "g",
            "H" => "h",
            "I" => "i",
            "J" => "j",
            "K" => "k",
            "L" => "l",
            "M" => "m",
            "N" => "n",
            "O" => "o",
            "P" => "p",
            "Q" => "q",
            "R" => "r",
            "S" => "s",
            "T" => "t",
            "U" => "u",
            "V" => "v",
            "W" => "w",
            "X" => "x",
            "Y" => "y",
            "Z" => "z"
        ];

    if ($char >= "A" && $char <= "Z") {
        return $tabtolow[$char];
    }

    return $char;
}

function kpz_strtoupper($char)
{
    $tabtoup =
        [
            "a" => "A",
            "b" => "B",
            "c" => "C",
            "d" => "D",
            "e" => "E",
            "f" => "F",
            "g" => "G",
            "h" => "H",
            "i" => "I",
            "j" => "J",
            "k" => "K",
            "l" => "L",
            "m" => "M",
            "n" => "N",
            "o" => "O",
            "p" => "P",
            "q" => "Q",
            "r" => "R",
            "s" => "S",
            "t" => "T",
            "u" => "U",
            "v" => "V",
            "w" => "W",
            "x" => "X",
            "y" => "Y",
            "z" => "Z"
        ];

    if ($char >= "a" && $char <= "w") {
        return $tabtoup[$char];
    }

    return $char;
}

function kpz_strlen($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}


function kpz_char_in_array($char, $array)
{
    $i = 0;
    while (isset($array[$i])) {
        if ($char == $array[$i]) {
            return true;
        }
        $i++;
    }
    return false;
}


function kpz_substr($str, $start, $length)
{
    $ret = "";
    for ($i = $start; $i < ($start + $length); $i++) {
        if (isset($str[$i])) {
            $ret = $ret . $str[$i];
        }
    }
    return $ret;
}


function kpz_htmlspecialchars($str)
{
    $ret = "";
    for ($i = 0; $i < strlen($str); $i++) {

        switch ($str[$i]) {
            case "<":
                $ret .= "&lt;";
                break;
            case ">":
                $ret .= "&gt;";
                break;
            case "&":
                $ret .= "&amp;";
                break;
            case "'":
                $ret .= "&#039;";
                break;
            case "\"":
                $ret .= "&quot;";
            default:
                $ret .= $str[$i];
                break;
        }
    }
    return $ret;
}


function kpz_count($arr)
{
    if (!isset($arr)) {
        return null;
    }

    $i = 0;
    foreach ($arr as $k => $v) {
        $i++;
    }
    return $i;
}


function kpz_is_numeric($str)
{
    for ($i = 0; $i < kpz_strlen($str); $i++) {
        if (!(($str[$i] >= "0" && $str[$i] <= "9") || $str[$i] === ".")) {
            return false;
        }
    }
    if (kpz_strlen($str) >= 2 && $str[$i - 1] === ".") {
        return false;
    }
    return true;
}

function kpz_is_integer($str)
{
    for ($i = 0; $i < kpz_strlen($str); $i++) {
        if (!($str[$i] >= "0" && $str[$i] <= "9")) {
            return false;
        }
    }
    return true;

}


function kpz_explode($separator, $str)
{
    $ret = [];
    $tmp = "";

    $i = 0;
    while (isset($str[$i])) {
        if ($str[$i] === $separator) {
            $ret[] = $tmp;
            $tmp = "";
        } else {
            $tmp .= $str[$i];
        }
        $i++;

    }
    $ret[] = $tmp;
    return $ret;
}

function kpz_implode($separator, $arr)
{
    if (!isset($arr)) {
        return null;
    }

    $str = "";
    foreach ($arr as $elem) {
        $str .= $elem;
        $str .= $separator;
    }

    return kpz_substr($str, 0, kpz_strlen($str) - 1);
}



function kpz_index_of($char, $str)
{
    if (!isset($str) || !isset($char)) {
        return null;
    }

    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            return $i;
        }
        $i++;
    }
    return null;
}

?>