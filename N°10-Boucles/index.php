<?php

$nb1 = 0;

while($nb1 <= 3)
{
    echo $nb1." ";
    $nb1++;
}

$nb1 = 0;
echo "<br>";

while($nb1 < 10)
{
    $nb1++;

    if($nb1 == 5)
        continue 1;   //On revient directement au FOR

    echo $nb1." ";
}


/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/


$nb2 = 1;

do
{
    echo $nb2;
    $nb2++;
}
while($nb2 < 3);


/* -----------------------------------------------*/
echo "<br>";
/* -----------------------------------------------*/


for($i = 0; $i < 2; $i++)
{
    echo "Je suis une phrase...<br>";
}

for($j = 0; $j < 10; $j++)
    for($k = 0; $k < 10; $k++)
        break 2;    //Interrompt les 2 structures FOR




?>