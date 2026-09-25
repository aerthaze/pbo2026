<?php
require_once '../vendor/autoload.php';


use App\Akademik\Dosen;
use App\Akademik\Dekan;




$dosen1 = new Dosen(101, "Budi Hartono", "08123456789", "Jl. Cendrawasih No. 10", "198012345");
$dekan1 = new Dekan(101, "Budi Hartono", "08123456789", "Jl. Cendrawasih No. 10", "198012345");
$dekan1->mengesahkanSuratIjinMagang();


$dosen1->cekIn();
echo "NIDN Dosen: " . $dosen1->getNidn();