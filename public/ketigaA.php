<?php

require_once '../app/Shapes/Lingkaran.php';
require_once '../app/Shapes/setengahLingkaran.php';
require_once '../app/Shapes/Bola.php';
require_once '../app/Shapes/Tabung.php';
require_once '../app/Shapes/Kerucut.php';

$nasi_rempah = new setengahLingkaran(4);

echo "Luas Nasi Rempah: " . $nasi_rempah->luas() . "\n";
echo "Keliling Nasi Rempah: " . $nasi_rempah->keliling() . "\n";
