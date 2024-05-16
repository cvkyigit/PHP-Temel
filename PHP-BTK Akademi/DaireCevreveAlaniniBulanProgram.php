<?php

/* Dairenin alanını ve çevresini hesaplayan program */
/* Dairenin Alanı: pi * yarıçap * yarıçap */
/* Dairenin Çevresi: 2 * pi * yarıçap */

$daireYaricap = 5;
$daireAlan;
$daireCevre;

$daireAlan = 3.14 * $daireYaricap * $daireYaricap;

echo "Daire Alanı = " .$daireAlan. "<br>";

$daireCevre = 2* 3.14 * $daireYaricap;

echo "Daire Çevresi = " .$daireCevre;

?>