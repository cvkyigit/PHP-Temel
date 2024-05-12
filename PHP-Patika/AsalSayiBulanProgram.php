<?php

/* Asal sayılar sadece 1'e ve kendisine bölünebilen, 1'den büyük doğol sayılar olarak tanımlanır. */
/* Bir sayının asal olup olmadığı ekrana yazdıran program. */

$sayi = 23;
$asalmi = 0;

for ($i = 2; $i < $sayi; $i++)
{
    if ($sayi % $i == 0)
    {
        $asalmi++;
    }
}

if ($asalmi == 0)
{
    echo "Sayı Asaldır.";
}
else
{
    echo "Sayı Asal Değildir.";
}

?>