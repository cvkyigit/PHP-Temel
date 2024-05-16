<?php

/* 0 ile 100 arasındaki tek sayıları toplayarak ekrana yazdıran program */

$toplam = 0;

for ($i =1; $i <=100; $i += 2)
{
    $toplam += $i;
}

echo "0 - 100 arasındaki tek sayıların toplamı: " .$toplam;

?>
