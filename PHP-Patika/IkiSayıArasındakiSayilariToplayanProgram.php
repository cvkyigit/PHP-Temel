<?php

/* İki sayı arasındaki sayıları toplayan program */

$sayi1 = 5;
$sayi2 = 10;
$toplam = 0;

for ($i = $sayi1 + 1; $i < $sayi2; $i++)
{
    $toplam += $i;
}

echo "Sonuç = ". " ". $toplam;

?>