<?php

session_start();

if (isset($_SESSION['tmpVarianMartabakManis'])) {
    $varianMartabakManis = $_SESSION['tmpVarianMartabakManis'];
}

if (isset($_SESSION['tmpVarianMartabakTelur'])) {
    $varianMartabakTelur = $_SESSION['tmpVarianMartabakTelur'];
}

if (isset($_SESSION['tmpPorsiMartabak'])) {
    $porsiMartabak = $_SESSION['tmpPorsiMartabak'];
}

if (isset($_SESSION['tmpHargaMartabak'])) {
    $hargaMartabak = $_SESSION['tmpHargaMartabak'];
}

$varianMartabakManis = $_GET['varianMartabakManis'];
$varianMartabakTelur = $_GET['varianMartabakTelur'];
$porsiMartabak = $_GET['porsiMartabak'];
$hargaMartabak = $_GET['hargaMartabak'];

// var_dump($varianMartabakManis);
// var_dump($varianMartabakTelur);
// var_dump($porsiMartabak);
// var_dump($hargaMartabak);

$_SESSION['tmpVarianMartabakManis'] = $varianMartabakManis;
$_SESSION['tmpVarianMartabakTelur'] = $varianMartabakTelur;
$_SESSION['tmpPorsiMartabak'] = $porsiMartabak;
$_SESSION['tmpHargaMartabak'] = $hargaMartabak;

// var_dump($_SESSION['tmpVarianMartabakManis']);
// var_dump($_SESSION['tmpVarianMartabakTelur']);
// var_dump($_SESSION['tmpPorsiMartabak']);
// var_dump($_SESSION['tmpHargaMartabak']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>