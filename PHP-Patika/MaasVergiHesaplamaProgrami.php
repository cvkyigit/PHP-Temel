<?php

/* Maaşı 15.000 TL’den fazla olanlardan %25 vergi kesintisi yapan, maaşı 10.00 0TL’den az olanlardan hiç kesinti yapmayan program. */

$maas = 18000;

if ($maas > 15000)
{
    $vergiKesintisi = $maas * 0.25;
    $netMaas = $maas - $vergiKesintisi;

    echo "Brüt Maaş: " .$maas . "TL" ."<br>";
    echo "Vergi Kesintisi: " .$vergiKesintisi . "TL" ."<br>";
    echo "Net Maaş: " .$netMaas . "TL" ."<br>";

}
else
{
    echo "Maaşınız 15.000 TL'den az olduğu için vergi kesintisi uygulanmamaktadır.". "<br>";
    echo "Net Maaş: " .$maas. "TL";
}

?>
