<?php

/* Bir dikdötgenin alan ve çevresini hesaplayan program */
/* Dikdörtgen Alan Hesabı: Kısa Kenar * Uzun Kenar */
/* Dikdörtgen Çevre Hesabı: 2 * (Kısa Kenar + Uzun Kenar) */

$uzunKenar = 25;
$kisaKenar = 8;

$alan = $kisaKenar * $uzunKenar;
$cevre = 2 * ($kisaKenar + $uzunKenar);

echo "Dikdötgenin Alanı = " .$alan. "<br>";
echo "Dikdörtgenin Çevresi = " .$cevre;

?>
