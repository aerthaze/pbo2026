<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');
if ($waktu >= "05:00" && $waktu < "11:00") {
    echo "Selamat pagi, {$nama}, sekarang {$waktu}\n";
} elseif ($waktu >= "11:00" && $waktu < "15:00") {
    echo "Selamat siang, {$nama}, sekarang {$waktu}\n";
} elseif ($waktu >= "15:00" && $waktu < "18:00") {
    echo "Selamat sore, {$nama}, sekarang {$waktu}\n";
} else {
    echo "Selamat malam, {$nama}, sekarang {$waktu}\n";
}
