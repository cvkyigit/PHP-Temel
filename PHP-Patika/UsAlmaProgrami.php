<?php

/* Php ile üs alma işlemini gerçekleştiren program */

$taban = 2;
$us = 5;
$sonuc = 1;

for ($i = 0; $i < $us; $i++)
{
    $sonuc = $sonuc * $taban;
}

echo "Sonuç = ". $sonuc;

?>