<?php

/*
    4 types scalaires :
        Booléen (boolean, bool)
        Entier (integer, int)
        Flottant (float, double)
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

$unBooleen = false;
$unEntier = 0xAFD7;
$unFlottant = 3.14;
$uneChaine = "oui";

$mot = "bien ?";
echo 'Tu vas '.$mot.' !';   //concaténation

?>

