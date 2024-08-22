<?php

session_start();

if (isset($_SESSION['tmpCoffeeName'])) {
    $coffeeName = $_SESSION['tmpCoffeeName'];
}

if (isset($_SESSION['tmpCoffeeType'])) {
    $coffeeType = $_SESSION['tmpCoffeeType'];
}

if (isset($_SESSION['tmpCoffeePrice'])) {
    $coffeePrice = $_SESSION['tmpCoffeePrice'];
}

$coffeeName[] = $_POST['coffeeName'];
$coffeeType[] = $_POST['coffeeType'];
$coffeePrice[] = $_POST['coffeePrice'];

// Check data
// var_dump($coffeeName);
// var_dump($coffeeType);
// var_dump($coffeePrice);

$_SESSION['tmpCoffeeName'] = $coffeeName;
$_SESSION['tmpCoffeeType'] = $coffeeType;
$_SESSION['tmpCoffeePrice'] = $coffeePrice;

// var_dump($_SESSION['tmpCoffeeName']);
// var_dump($_SESSION['tmpCoffeeType']);
// var_dump($_SESSION['tmpCoffeePrice']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE MAENG</title>
</head>
<body>
    <h2>Daftar Pesanan</h2>
    <table border="1px" cellpadding="5px">
        <tr>
            <th>Nama Kopi</th>
            <th>Tipe Kopi</th>
            <th>Harga Kopi</th>
        </tr>
        <?php for ($i=0; $i < count($coffeeName) ; $i++) : ?>
        <tr>
            <td><?= $coffeeName[$i]; ?></td>
            <td><?= $coffeeType[$i]; ?></td>
            <td><?= $coffeePrice[$i]; ?></td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>