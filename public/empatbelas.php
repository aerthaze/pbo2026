<?php


require_once __DIR__ . '/../vendor/autoload.php';


use App\Akademik\TenagaKependidikan;

$pegawai = new TenagaKependidikan(100, "Pegawai Contoh", "08111234", "Jl. Antah Berantah", 3000000);
$pegawai->cekIn();
