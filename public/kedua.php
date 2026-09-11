<?php
function luasLingkaran(float $jari): float
{
    $luas = 3.14 * $jari * $jari;
    return $luas;
}
function kelilinglingkaran(float $jari): float
{
    $keliling = 2 * $jari * 3.14;
    return $keliling;
}
function volumebola(float $jari): float
{
    $volume = 4 / 3 * 3.14 * $jari * $jari * $jari;
    return $volume;
}
function volumetabung(float $jari, float $tinggi): float
{
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}
function volumekerucut(float $jari, float $tinggi): float
{
    $volume = 1 / 3 * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}
$tinggi = 10;
$jari = 45;
$luas_tanah = luasLingkaran($jari);
echo "Luas tanah budi adalah {$luas_tanah}";
$keliling_tanah = kelilinglingkaran($jari);
echo "Keliling tanah budi adalah {$keliling_tanah}";
$volume_bola = volumebola($jari);
echo "Volume bola budi adalah {$volume_bola}";
$volume_tabung = volumetabung($jari, $tinggi);
echo "Volume tabung budi adalah {$volume_tabung}";
$volume_kerucut = volumekerucut($jari, $tinggi);
echo "Volume kerucut budi adalah {$volume_kerucut}";
