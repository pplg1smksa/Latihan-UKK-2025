<?php

$merkHandphone[] = $_GET['merkHandphone'];
$modelHandphone[] = $_GET['modelHandphone'];
$ram[] = $_GET['ram'];
$storage[] = $_GET['storage'];
$harga[] = $_GET['harga'];

// var_dump($merkHandphone);
// var_dump($modelHandphone);
// var_dump($ram);
// var_dump($storage);
// var_dump($harga);

$_SESSION['tmpMerkHandphone'] = $merkHandphone;
$_SESSION['tmpModelHandphone'] = $modelHandphone;
$_SESSION['tmpRam'] = $ram;
$_SESSION['tmpStorage'] = $storage;
$_SESSION['tmpHarga'] = $harga;


// var_dump($_SESSION['tmpMerkHandphone']);
// var_dump($_SESSION['tmpModelHandphone']);
// var_dump($_SESSION['tmpRam']);
// var_dump($_SESSION['tmpStorage']);
// var_dump($_SESSION['tmpHarga']);

if (isset($_SESSION['tmpMerHandphone'])) {
    $merkHandphone = $_SESSION['tmpMerHandphone'] ;
}
if (isset($_SESSION['tmpModelHandphone'])) {
    $modelHandphone = $_SESSION['tmpModelHandphone'] ;
}
if (isset($_SESSION['tmpRam'])) {
    $ram = $_SESSION['tmpRam'] ;
}
if (isset($_SESSION['tmpStorage'])) {
    $storage = $_SESSION['tmpStorage'] ;
}
if (isset($_SESSION['tmpHarga'])) {
    $harga = $_SESSION['tmpHarga'] ;
}

// var_dump($merkHandphone);
// var_dump($modelHandphone);
// var_dump($ram);
// var_dump($storage);
// var_dump($harga);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
</head>
<body>
    <h1>Data Pesanana</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Merk</th>
            <th>Model</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Harga</th>
        </tr>
        <?php $num = 0;
        while ($num < count($harga)) : ?>
        <tr>
            <td><?= $num + 1 ?></td>
            <td><?= $merkHandphone[$num] ?></td>
            <td><?= $modelHandphone[$num] ?></td>
            <td><?= $ram[$num] ?></td>
            <td><?= $storage[$num] ?></td>
            <td><?= $harga[$num] ?></td>
        </tr>
        <?php $num++;
        endwhile; ?>
    </table>
</body>
</html>