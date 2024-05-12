<?php

/* Girilen sayı uzunluğunda fibonacci dizisini ekrana yazdıran program */
/* Fibonacci dizisi, her sayının kendisinden önceki sayı ile toplanması sonucu oluşan bir sayı dizisidir. */

$x = 0;
$y = 1;
$tekrar = 10;

for ($i = 0; $i <= $tekrar; $i++)
{
    $z = $x + $y;

    echo $z ." ";

    $x = $y;
    $y = $z;
}

?>