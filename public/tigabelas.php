<?php

require_once '../vendor/autoload.php';

use App\Akademik\TenagaKependidikan;

$tendik1 = new TenagaKependidikan(201, "Siti Rahma", "081399998888", "Jl. Merdeka No. 5", 3500000);

$tendik1->cekIn();
$tendik1->cuti();

echo "Gaji Pokok: Rp " . number_format($tendik1->getGajiPokok(), 0, ',', '.') . "\n";