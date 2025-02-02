<?php 

    session_start();
    if (isset($_SESSION['tmpKodeEvent'])) {
        $kodeEvent = $_SESSION['tmpKodeEvent'];
    }
    if (isset($_SESSION['tmpNamaEvent'])) {
        $namaEvent = $_SESSION['tmpNamaEvent'];
    }
    if (isset($_SESSION['tmpKategori'])) {
        $kategori = $_SESSION['tmpKategori'];
    }
    if (isset($_SESSION['tmpTanggalEvent'])) {
        $tanggalEvent = $_SESSION['tmpTanggalEvent'];
    }
    if (isset($_SESSION['tmpPenyelenggara'])) {
        $penyelenggara = $_SESSION['tmpPenyelenggara'];
    }
    

    $kodeEvent[] = $_POST['kodeEvent'];
    $namaEvent[] = $_POST['namaEvent'];
    $kategori[] = $_POST['kategori'];
    $tanggalEvent[] = $_POST['tanggalEvent'];
    $penyelenggara[] = $_POST['penyelenggara'];

    // var_dump($kodeEvent);
    // var_dump($namaEvent);
    // var_dump($kategori);
    // var_dump($tanggalEvent);
    // var_dump($penyelenggara);

    $_SESSION['tmpKodeEvent'] = $kodeEvent;
    $_SESSION['tmpNamaEvent'] = $namaEvent;
    $_SESSION['tmpKategori'] = $kategori;
    $_SESSION['tmpTanggalEvent'] = $tanggalEvent;
    $_SESSION['tmpPenyelenggara'] = $penyelenggara;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Event</th>
                <th>Nama Event</th>
                <th>Kategori</th>
                <th>Tanggal Event</th>
                <th>Penyelenggara</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($kodeEvent); $i++) : ?>
            <tr>
                <td><?= $kodeEvent[$i] ?></td>
                <td><?= $namaEvent[$i] ?></td>
                <td><?= $kategori[$i] ?></td>
                <td><?= $tanggalEvent[$i] ?></td>
                <td><?= $penyelenggara[$i] ?></td>
            </tr>
            <?php endfor ?>
        </tbody>
    </table>
</body>
</html>