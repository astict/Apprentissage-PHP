<?php

$tab = array();    //Tableau vide
$tab = [];     //Autre syntaxe

echo gettype($tab);

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

$tab_integers = 
[
    1 => 10,    //Incrémentation auto de la clé
    "ok" => 11,
    12,
    13,
    14 => [5, 3, 2],
    15,
    date("Y-m-d"),
    3.162
];

echo '<pre>';
print_r($tab_integers);
echo '</pre>';

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

$tab_population_villes = 
[
    "Paris" => 2100000,
    "Orléans" => 116357,
    "Clermont-Ferrand" => 146351
];

echo "Il y a " . $tab_population_villes["Paris"] . " habitants à Paris !";

$tab_population_villes["Clermont-Ferrand"] = 147555;
echo $tab_population_villes["Clermont-Ferrand"];


foreach($tab_population_villes as $data)
{
    echo '<p>' . $data . '</p>';
}

foreach($tab_population_villes as $key => $value)
{
    echo '<p>' . $key . ' : ' . $value . '</p>';
}



?>