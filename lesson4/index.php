<?php
require_once '../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environmentø($loader);

echo $twig->render('main.tmpl', ['goods' => []]);