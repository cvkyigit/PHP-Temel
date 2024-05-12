<?php

$ogrenciler = array(
    array("A", "B", 25, "Bilgisayar Mühendisliği"),
    array("C", "D", 25, "Yazılım Mühendisliği"),
    array("E", "F", 20, "Bilgisayar Programcılığı")
);

$ogrenciler[1][2] = 24;
$ogrenciler[2][3] = "Yazılım Mühendisliği";

foreach ($ogrenciler as $ogrenci) {
    echo implode(", ", $ogrenci). "<br>";

}

?>