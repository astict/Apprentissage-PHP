<?php

/*
    - Une fonction possède un nom
    - Elle peut avoir des paramètres
    - Elle peut retourner un résultat

    Types de paramètres : 
        array
        callable
        bool
        int
        float
        string
*/

function hello1()
{echo "Bonjour";}

hello1();    //Appel de la fonction

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function hello2($name)
{echo 'Bonjour' .$name;}

hello2("Jason");    

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function hello3($name = "Henri")
{echo 'Bonjour' .$name;}

hello3(); 

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function modify_variable($var)
{
    $var = "hacked";
    return $var;
}

$var = "OK";
modify_variable($var);
echo $var;

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function ma_fonction(&$number)      // Passage par référence
{
    $number = 6;
}

$number = 14;
ma_fonction($number);
echo $number;

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function sum(...$nbrs)
{
    $res = 0;

    foreach($nbrs as $nb)
        $res += $nb;

    echo $res;
}

sum(1, 223, 33, 47, 5, -3.14);

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function truc() : string        // Spécification du retour 
{
    return 10;
}

echo gettype(truc());

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/

function bjr()
{
    echo "Bonjour !";
}

$coucou = "bjr";
$coucou();      // -> bjr();


$coucou2 = function() 
{
    echo "  Salut !";
};

$coucou2();

/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/


?>