<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Guachor Phone</title>
</head>
<body>
    <h1>Form Pemesanan Handphone</h1>
    <div class="container">
        <form action="data.php" method="get">

        <label for="merkHandphone">Merk Handphone</label>
        <input type="text" name="merkHandphone" id="modelHandphone" required><br>
        <label for="modelHandphone">model Handphone</label>
        <input type="text" name="modelHandphone" id="modelHandphone" required><br>

        <label for="ram">RAM</label>
        <select name="ram" id="ram">
            <option value="">Pilih RAM</option>
            <option value="4GB">4GB</option>
            <option value="6GB">6GB</option>
            <option value="8GB">8GB</option>
            <option value="12GB">12GB</option>
        </select><br>

        <label for="storage" id="storage">Penyimpanan</label>
        <select name="storage" id="storage">
            <option value="">Pilih Penyimpanan</option>
            <option value="64GB">64GB</option>
            <option value="128GB">128GB</option>
            <option value="256GB">256GB</option>
            <option value="512GB">512GB</option>
            <option value="1024GB">1024GB</option>
        </select><br>

        <label for="harga">Harga</label><br>
        <input type="number" name="harga" id="harga">
        <button type="submit">Pesan</button>

        </form>
    </div>
</body>
</html>