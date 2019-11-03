<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\ArrayLoader([
  'index' => 'Hello {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);

$dir = "./images/";
$imageList = array_diff(scandir($dir), ['..', '.']);

var_dump($imageList);