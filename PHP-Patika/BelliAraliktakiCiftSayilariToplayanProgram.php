<?php

/* 0 ile 100 arasındaki çift sayıları toplayarak ekrana yazdıran program. */

$sayac = 0;
$toplam = 0;

while ($sayac <= 100)
{
    $toplam += $sayac;
    $sayac += 2;
}

echo "0 - 100 arasındaki çift sayıların toplamı: " .$toplam;

?>