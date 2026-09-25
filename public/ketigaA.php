<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Shapes\setengahLingkaran;

$nasi_rempah = new setengahLingkaran(4);

echo "Luas Nasi Rempah: " . $nasi_rempah->luas() . "\n";
echo "Keliling Nasi Rempah: " . $nasi_rempah->keliling() . "\n";
