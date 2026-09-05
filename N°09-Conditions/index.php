<?php

/*
    Opérateurs de comparaison :
        ==  (égal à)
        === (identique à : en valeur ET en type)
        !=  (différent de)
        !== (différence de valeur OU différence de type)
        <   (inférieur à)
        >   (supérieur à)
        <=  (inférieur OU égal à)
        >=  (supérieur OU égal à)
        <=> (supérieur à, ou égal à ou inférieur à ?) ->  0   (si c'est égal)
                                                      ->  1   (si A > B)
                                                      -> -1   (si A < B)

                                                      
    Fonctions : isset(), unset(), 
                is_int(), is_bool(), is_float(), is_string()

*/

$nb1 = 14;
$nb2 = 8;

if($nb1 == 14) 
{ echo "Number vaut 14"; }


echo "<br>";


if($nb1 === 14)  
{ echo "Number est du même type que $nb1"; }


echo "<br>";


if($nb2 != 14) 
{ echo "OK"; }


echo "<br>";


if($nb2 !== 14) 
{ echo "OK"; }


echo "<br>";


if($nb1 == 14 && $nb2 == 8) 
{ echo "VALIDE"; }


echo "<br>";


$resultCOMP = $nb1 <=> $nb2;

if($resultCOMP == 0)
{ echo "0"; }
else if($resultCOMP == 1)
{ echo "1"; }
else if($resultCOMP == -1)
{ echo "-1"; }


/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/


switch($nb2)
{
    case 1: 
        echo "1";
        break;

    case 4:
        echo "4";
        break;
    
    case 8:
        echo "8";
        break;
    
    default:
        echo "Pas valide";
        break;
}


/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/


$jeu_lance = true;
$message = ($jeu_lance) ? "Jeu en route" : "Jeu éteint";
echo $message;


echo "<br>";


$maVariable = "ok";

if(isset($maVariable))  
    echo "Elle existe";
else
    echo "Elle n'existe pas";


echo "<br>";


unset($maVariable);

if(isset($maVariable))  
    echo "Elle existe";
else
    echo "Elle n'existe pas";


echo "<br>";


$res = $maVariable ?? "Elle n'existe pas";
echo $res;


/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

$nb3 = 45;

if(is_int($nb3))
    echo "C'est un entier";

?>