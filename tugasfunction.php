<?php

function extractNipInfo($nip) {

    if (strlen($nip) != 18) {
        return "NIP tidak valid.";
    }

   
    $tahunLahir = substr($nip, 0, 4);
    $bulanLahir = substr($nip, 4, 2);
    $tanggalLahir = substr($nip, 6, 2);

   
    $jenisKelaminDigit = substr($nip, 10, 1);
    $jenisKelamin = ($jenisKelaminDigit % 2 == 0) ? "Perempuan" : "Laki-laki";

    $tanggalLahirFormat = "$tanggalLahir $bulanLahir $tahunLahir";

    return [
        'tanggal_lahir' => $tanggalLahirFormat,
        'jenis_kelamin' => $jenisKelamin
    ];
}

$nip = "198203122009042001";
$info = extractNipInfo($nip);

echo "a. Tanggal Lahir: " . $info['tanggal_lahir'] . "\n";
echo "<br>";
echo "b. Jenis Kelamin: " . $info['jenis_kelamin'] . "\n";