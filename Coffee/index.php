<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COFFEE MAENG</title>
</head>
<body>
    <h2>COFFEE MAENG</h2>
    <div class="container">
        <form action="proses.php" method="post">

            <label for="coffeeName">Nama Kopi</label>
            <input type="text" name="coffeeName" required>

            <label for="coffeeType">Tipe Kopi</label>
            <input type="text" name="coffeeType" required>

            <label for="coffeePrice">Harga</label>
            <input type="text" name="coffeePrice">

            <button type="submit">Tambah</button>

        </form>
    </div>
</body>
</html>