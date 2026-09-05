<?php

/*

    Fonctions : intdiv(), fmod(), gettype()

    Arithmétiques : +, -, *, /, %, **
    Affectations : =, +=, -=, *=, /=, %=
    Concaténation : ., .=
    Logiques : and, &&, or, ||, xor
*/

$number1 = 26;
$number2 = 14;

$resultPLUS = $number1 + $number2;
$resultDIV = $number1 / $number2;
$resultMOD = $number1 % $number2;
$resultPOW = $number2 ** 2;

$resultINTDIV = intdiv($number1, $number2);  //division entière
$resultFMOD = fmod($number1,$number2);  //modulo

echo gettype($resultDIV);

echo "<br>";

$strA = "Bonjour ";
$strB = "tout le monde";

echo $strA . $strB;

echo "<br>";

$chaine = "";
echo $chaine;

$chaine .= "A";
$chaine .= "B";
echo $chaine;

echo "<br>";

?>