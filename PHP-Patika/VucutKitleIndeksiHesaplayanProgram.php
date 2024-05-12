<?php

/* Boy ve kilo değerlerine göre vücut kitle indeksi hesaplayan program */
/* Vücut Kitle İndeksi = Kilo / (boy * boy) */

$boy = 1.84;
$kilo = 75;

$vucutKitleIndeksi = $kilo / ($boy * $boy);

echo "Vücut Kitle İndeksiniz : ";

if ($vucutKitleIndeksi < 20)
{
    echo $vucutKitleIndeksi . " - Zayıf";
}
elseif ($vucutKitleIndeksi >= 20 && $vucutKitleIndeksi <= 24.9)
{
    echo $vucutKitleIndeksi . " - Normal";
}
elseif ($vucutKitleIndeksi >= 25 && $vucutKitleIndeksi <= 29.9)
{
    echo $vucutKitleIndeksi . " - Hafif Şişman";
}
elseif ($vucutKitleIndeksi >= 30 && $vucutKitleIndeksi <= 34.9)
{
    echo $vucutKitleIndeksi . " - Şişman";
}
elseif ($vucutKitleIndeksi >= 35 && $vucutKitleIndeksi <= 44.9)
{
    echo $vucutKitleIndeksi . " - Çok Şişman";
}
elseif ($vucutKitleIndeksi >= 45 && $vucutKitleIndeksi <= 49.9)
{
    echo $vucutKitleIndeksi . " - Aşırı Şişman";
}
elseif ($vucutKitleIndeksi > 49.9)
{
    echo $vucutKitleIndeksi . " - Ölümcül Derecede Şişman";
}

?>
