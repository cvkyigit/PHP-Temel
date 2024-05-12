<?php

/* Php ile çarpım tablosunu 10'lara kadar ekrana yazan program. */

for ($i = 1; $i <= 10; $i++)
{
    for ($j = 0; $j <= 10; $j++)
    {
        echo "$i x $j = " . $i * $j . "<br>";
    }
    echo "<br>";
}

?>