<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

require './config.php';
// Ругается на подключение к БД, поэтому ДЗ на моках
//$dbh = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=UTF8", $DB_USER, $DB_PASSWORD);
require './data.php';

echo $twig->render('main.tmpl', ['goods' => array_slice($goods, 0, 3)]);