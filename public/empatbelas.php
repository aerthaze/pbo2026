<?php


require_once __DIR__ . '/../vendor/autoload.php';


use App\Akademik\Pegawai;
use App\Akademik\TenagaKepedidikan;

$pegawai = new Pegawai(100, "Pegawai Abstrak", "08111234", "Jl. Antah Berantah");
$pegawai->cekIn();
