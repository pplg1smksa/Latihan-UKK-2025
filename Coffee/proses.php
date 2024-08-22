<?php

session_start();

$coffeeName[] = $_POST['coffeeName'];
$coffeeType[] = $_POST['coffeeType'];
$coffeePrice[] = $_POST['coffeePrice'];

// Check data
// var_dump($coffeeName);
// var_dump($coffeeType);
// var_dump($coffeePrice);

$_SESSION['coffeeName'] = $coffeeName;
$_SESSION['coffeeType'] = $coffeeType;
$_SESSION['coffeePrice'] = $coffeePrice;

?>