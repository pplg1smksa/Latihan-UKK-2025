<?php
$categories = ['PHBI', 'Kesiswaan', 'Olahraga dan Seni', 'Umum'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <form action="table.php" method="post">
            <label for="kodeEvent">Kode Event: </label>
            <input type="text" name="kodeEvent" required>
            <label for="namaEvent">Name Event: </label>
            <input type="text" name="namaEvent" required>
            <label for="kategori">Kategori: </label>
            <select name="kategori" id="">
                <option value="" disabled selected>Pilih kategori</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category ?>"><?= $category ?></option>
                <?php endforeach; ?>
            </select>
            <label for="tanggalEvent">Tanggal Event: </label>
            <input type="date" name="tanggalEvent" required>
            <label for="penyelenggara">Penyelenggara: </label>
            <input type="text" name="penyelenggara" required>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>