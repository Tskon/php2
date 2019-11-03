<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$dir = "./images/";
$imageList = array_diff(scandir($dir), ['..', '.']);

echo $twig->render('main.tmpl', ['imageDir' => $dir, 'imageList' => $imageList]);
