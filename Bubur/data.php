<?php
// Memulai session
session_start();

// Mengecek apakah session sudah ada isinya atau belum
if (isset($_SESSION['tmpToping'])) {
    $toping = $_SESSION['tmpToping'];
}

if (isset($_SESSION['tmpSambal'])) {
    $sambal = $_SESSION['tmpSambal'];
}

if (isset($_SESSION['tmpPorsi'])) {
    $porsi = $_SESSION['tmpPorsi'];
}

if (isset($_SESSION['tmpHarga'])) {
    $harga = $_SESSION['tmpHarga'];
}

// Memastikan data diterima dari GET dan menambahkannya ke array

    $toping[] = isset($_GET['toping']) ? implode(", ", $_GET['toping']) : '';
    $sambal[] = $_GET['sambal'];
    $porsi[] = $_GET['porsi'];
    $harga[] = $_GET['harga'];


// Memastikan data sudah dapat ditangkap sebelum ditampilkan
// var_dump($toping);
// var_dump($sambal);
// var_dump($porsi);
// var_dump($harga);

// Menyimpan data kembali ke session
$_SESSION['tmpToping'] = $toping;
$_SESSION['tmpSambal'] = $sambal;
$_SESSION['tmpPorsi'] = $porsi;
$_SESSION['tmpHarga'] = $harga;

// Memastikan data sudah dapat ditangkap sebelum ditampilkan
// var_dump($_SESSION['tmpToping']);
// var_dump($_SESSION['tmpSambal']);
// var_dump($_SESSION['tmpPorsi']);
// var_dump($_SESSION['tmpHarga']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
    <title>Simulasi UKK</title>
</head>
<body>
    <h1>Bubur Ayam Mang Bilal</h1>
    <table>
        <tr>
            <th>No. Pesanan</th>
            <th>Toping</th>
            <th>Sambal</th>
            <th>Porsi</th>
            <th>Harga</th>
        </tr>
        
        <?php $i=1; ?>
        <?php while($i < count($porsi)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $toping[$i]; ?></td>
            <td><?= $sambal[$i]; ?></td>
            <td><?= $porsi[$i]; ?></td>
            <td><?= $harga[$i]; ?></td>
        </tr>
        <?php  $i++; ?>
        <?php endwhile; ?>
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>
