<?php
class Lingkaran
{
    const PHI = 3.14;
    public float $jari_jari;

    public function luas(): float
    {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(): float
    {
        return 2 * self::PHI * $this->jari_jari;
    }
}


class setengahLingkaran
{
    const PHI = 3.14;
    public float $jari_jari;

    public function luas(): float
    {
        return (1 / 2) * self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(): float
    {
        return self::PHI * $this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public float $jari_jari;

    public function volume(): float
    {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    public function volume(): float
    {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    public function volume(): float
    {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


$nasi_rempah = new setengahLingkaran();
$nasi_rempah->jari_jari = 4;

echo "Luas Nasi Rempah: " . $nasi_rempah->luas() . "\n";
echo "Keliling Nasi Rempah: " . $nasi_rempah->keliling() . "\n";

