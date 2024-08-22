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

var_dump($_SESSION['tmpCoffeeName']);
var_dump($_SESSION['tmpCoffeeType']);
var_dump($_SESSION['tmpCoffeePrice']);

?>