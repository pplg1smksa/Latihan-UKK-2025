<?php
    $idObat = $_GET['idObat'];
    $jenisObat = $_GET['jenisObat'];
    $hargaObat = $_GET['hargaObat'];

    // Menggunakan var_dump untuk memeriksa apakah data berhasil ditangkap di file ini
    // var_dump($idObat);
    // var_dump($jenisObat);
    // var_dump($hargaObat);

    // Menampilkan data dari hasil input
    echo "ID Obat = " . "<strong>$idObat</strong>" . "<br>";
    echo "Jenis Obat = " . "<strong>$jenisObat</strong>" . "<br>";
    echo "harga Obat = " . "<strong>$hargaObat</strong>" . "<br>";