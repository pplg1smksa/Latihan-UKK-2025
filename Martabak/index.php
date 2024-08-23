<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martabak Guacor</title>
</head>
<body>
    <h1>Martabak Guacor</h1>

    <div class="container">
        <form action="proses.php" method="get">
            <label for="">Varian Martabak Manis</label><br>
            <input type="checkbox" name="varianMartabakManis[]" value="Coklat">
            <label for="varianCoklat">Coklat</label><br>
            <input type="checkbox" name="varianMartabakManis[]" value="Keju">
            <label for="varianKeju">Keju</label><br>
            <input type="checkbox" name="varianMartabakManis[]" value="Kacang">
            <label for="varianKacang">Kacang</label><br>
            <input type="checkbox" name="varianMartabakManis[]" value="Susu">
            <label for="varianSusu">Susu</label><br>

            <label for="">Varian Martabak Telur</label><br>
            <input type="checkbox" name="varianMartabakTelur[]" value="Daging">
            <label for="varianDaging">Daging</label><br>
            <input type="checkbox" name="varianMartabakTelur[]" value="Sayur">
            <label for="varianSayur">Sayur</label><br>
            <input type="checkbox" name="varianMartabakTelur[]" value="Bawang">
            <label for="varianBawang">Bawang</label><br>

            <label for="porsiMartabak">Porsi</label>
            <input type="number" name="porsiMartabak" id="porsiMartabak"><br>

            <label for="hargaMartabak">Harga</label>
            <input type="number" id="hargaMartabak" name="hargaMartabak" min="25000" step="2500"><br>

            <button type="submit">Pesan</button>
        </form>
    </div>
</body>
</html>