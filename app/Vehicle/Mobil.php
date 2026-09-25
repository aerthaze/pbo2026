<?php

namespace App\Vehicle;

class Mobil
{
    public string $warna;
    public string $merk;
    public int $tahun_produksi;

    public function klakson(): void
    {
        echo "Telolet telolet";
    }

    public function getWarnaMerah(): string
    {
        return "merah";
    }
}
