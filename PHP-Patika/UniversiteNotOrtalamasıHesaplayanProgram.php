<?php

/* Üniversite not hesabı yapan program (vize: %40, final: %60) */

$vize = 50;
$final = 75;

$ortalama = $vize * 0.4 + $final * 0.6;

if ($ortalama >= 85 && $ortalama <= 100)
{
    echo "Not Ortalamanız = " .$ortalama. " ". "Harf Notunuz = AA";
}
elseif ($ortalama >= 70 && $ortalama <= 85)
{
    echo "Not Ortalamanız = " .$ortalama. " ". "Harf Notunuz = BB";
}
elseif ($ortalama >= 60 && $ortalama <= 70)
{
    echo "Not Ortalamanız = " .$ortalama. " ". "Harf Notunuz = CC";
}
elseif ($ortalama >= 50 && $ortalama <= 60)
{
    echo "Not Ortalamanız = " .$ortalama. " ". "Harf Notunuz = DD";
}
else
{
    echo "Not Ortalamanız =" .$ortalama. " ". "Harf Notunuz = FF";
}

?>