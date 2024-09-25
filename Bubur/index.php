<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bubur</title>
</head>
<body>
    <h1>Bubur Mutilasi Mang Bilal</h1>
    <div class="container">
        <form action="data.php" method="get">
        <h3 for="">Toping</h3>
            <input type="checkbox" name="toping[]" id="daunBawang" value="Daun Bawang" require>
            <label for="daunBawang">Daun Bawang</label>
            <input type="checkbox" name="toping[]" id="bawangGoreng" value="Bawang Goreng" require>
            <label for="bawangGoreng">Bawang Goreng</label>
            <input type="checkbox" name="toping[]" id="daunSeledri" value="Daun Seledri" require>
            <label for="daunSeledri">Daun Seledri</label>
            
            <h3 for="">Sambal</h3>
            <input type="radio" name="sambal" id="tidakPakai" value="Tidak Pakai" require>
            <label for="tidakPakai">Tidak Pakai</label>
            <input type="radio" name="sambal" id="pedasSedikit" value="pedas Sedikit" require>
            <label for="pedasSedikit">Pedas Sedikit</label>
            <input type="radio" name="sambal" id="pedasSedang" value="Pedas Sedang" require>
            <label for="pedasSedang">Pedas Sedang</label>
            <input type="radio" name="sambal" id="pedasExtra" value="Pedas Extra" require>
            <label for="pedasExtra">Pedas Extra</label>

            <h3 for="porsi">porsi</h3>
            <input type="number" name="porsi" id="porsi" require>
            <h3 for="harga">Harga</h3>
            <input type="number" name="harga" id="harga" min="10000" step="2500" require>
            
            <button type="submit">Pesan</button>

        </form>
    </div>
</body>
</html>
