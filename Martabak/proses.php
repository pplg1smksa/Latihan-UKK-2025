<?php

session_start();

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