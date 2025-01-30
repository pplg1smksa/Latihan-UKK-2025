<?php 

$categories = ['PHBI', 'Olahraga dan Seni', 'Umum'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Event</title>
</head>
<body>
    <form action="table.php" method="post">
        <label for="eventCode">Kode Event: </label>
        <input type="text" name="eventCode">
        <label for="eventName">Name Event: </label>
        <input type="text" name="eventName">
        <label for="categories">Kategory</label>
        <select name="categories" id="">
            <option value="" disabled selected>Pilih Kategori</option>
            <?php foreach($categories as $category) : ?>
            <option value="<?= $category ?>"><?= $category ?></option>
            <?php endforeach ?>
        </select>
        <label for="date">Tanggal Event: </label>
        <input type="date" name="date">
        <label for="organizer">Penyelenggara: </label>
        <input type="text" name="organizer">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>