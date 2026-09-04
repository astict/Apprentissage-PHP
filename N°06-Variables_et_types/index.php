<?php

/*
    4 types scalaires :
        Booléen (boolean, bool)
        Entier (integer, int)
        Flottant (float, double, real)
        Chaîne de caractères (string)
    
    4 types composés :
        Tableau (array)
        Objets (object)
        Fonctions de rappel (callable)
        Itérateurs (iterable)

    2 types divers
        Ressources (resource)
        NULL 
*/

$monPrenom = "Thomas";
echo "Bonjour $monPrenom !\n";

echo "<br>";

$unBooleen = false;
$unEntier = 0xAFD7;
$unFlottant = 3.14;
$uneChaine = "oui";

$mot = "bien ?";
$b = &$mot;
$mot = "mal ?";
echo 'Tu vas '.$mot.' !';   //concaténation

/* $b et $mot pointent vers le même emplacement en mémoire. Si la valeur de l'un change, l'autre changera automatiquement */


echo "<br>";

echo (int)$unFlottant;
echo "<br>";
echo (string)$unFlottant;

echo "<br>";

/*

unset($monPrenom);  //efface la variable de la mémoire
var_dump($monPrenom);   //afficher informations d'une variable 

*/

?>

