<?php

function leat_speak($str) {

    $i = 0;
    
    while (isset($str[$i])) {
        if ($str[$i] === "a" || $str[$i] === "A")
        echo"4";
        else if ($str[$i] === "b" || $str[$i] === "B")
        echo "8";
    else if ($str[$i] === "c" || $str[$i] === "C")
        echo "[";
    else if ($str[$i] === "d" || $str[$i] === "D")
        echo "|)";
    else if ($str[$i] === "e" || $str[$i] === "E")
        echo "3";
    else if ($str[$i] === "f" || $str[$i] === "F")
        echo "|=";
    else if ($str[$i] === "g" || $str[$i] === "G")
        echo "6";
    else if ($str[$i] === "h" || $str[$i] === "H")
        echo "#";
    else if ($str[$i] === "i" || $str[$i] === "I")
        echo "1";
    else if ($str[$i] === "j" || $str[$i] === "J")
        echo "_|";
    else if ($str[$i] === "k" || $str[$i] === "K")
        echo "|<";
    else if ($str[$i] === "l" || $str[$i] === "L")
        echo "1";
    else if ($str[$i] === "m" || $str[$i] === "M")
        echo "/\\/\\";
    else if ($str[$i] === "n" || $str[$i] === "N")
        echo "|\\|";
    else if ($str[$i] === "o" || $str[$i] === "O")
        echo "0";
    else if ($str[$i] === "p" || $str[$i] === "P")
        echo "|*";
    else if ($str[$i] === "q" || $str[$i] === "Q")
        echo "0,";
    else if ($str[$i] === "r" || $str[$i] === "R")
        echo "|2";
    else if ($str[$i] === "s" || $str[$i] === "S")
        echo "5";
    else if ($str[$i] === "t" || $str[$i] === "T")
        echo "7";
    else if ($str[$i] === "u" || $str[$i] === "U")
        echo "_|_";
    else if ($str[$i] === "v" || $str[$i] === "V")
        echo "\\/";
    else if ($str[$i] === "w" || $str[$i] === "W")
        echo "\\/\\/";
    else if ($str[$i] === "x" || $str[$i] === "X")
        echo "><";
    else if ($str[$i] === "y" || $str[$i] === "Y")
        echo "`/";
    else if ($str[$i] === "z" || $str[$i] === "Z")
        echo "2";
    else
        echo $str[$i];
    $i++;
    }
}

$str = "Hello LaPlateforme!";
return leat_speak($str);

?>