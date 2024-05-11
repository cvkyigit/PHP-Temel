<?php

/* Faktöriyel, bir sayının 1’den başlayarak kendisine kadar olan sayıların çarpımıdır. Programlamada ki mantıkta aynı şekilde ilerliyor. Değeri 1 olan bir değişkenimiz var. X değişkeni olsun. X’i önce 2 ile çarpıyoruz ve sonucu x’e atıyoruz. Sonra 3’le çarpıyoruz yine x’e atıyoruz. Bu şekilde istenilen sayıya kadar devam ettiğimizde sayının faktöriyelini bulmuş oluyoruz. */

$sayi = 5;
$sonuc = 1;

for ($i = 1; $i <= $sayi; $i++)
{
    $sonuc = $sonuc * $i;
}

echo $sayi. " " ."sayısının faktöriyeli : " .$sonuc. "'dir.";