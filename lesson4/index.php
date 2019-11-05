<?php
require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

require './config.php';
// Ругается на подключение к БД, поэтому ДЗ на моках
//$dbh = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=UTF8", $DB_USER, $DB_PASSWORD);

$goods = [
  ['title' => 'product1', 'coast' => 100 ],
  ['title' => 'product2', 'coast' => 200 ],
  ['title' => 'product3', 'coast' => 300 ],
  ['title' => 'product4', 'coast' => 400 ],
  ['title' => 'product5', 'coast' => 500 ],
  ['title' => 'product6', 'coast' => 600 ],
  ['title' => 'product7', 'coast' => 700 ],
  ['title' => 'product8', 'coast' => 800 ],
  ['title' => 'product9', 'coast' => 900 ],
  ['title' => 'product10', 'coast' => 1000 ],
  ['title' => 'product11', 'coast' => 200 ],
  ['title' => 'product12', 'coast' => 300 ],
  ['title' => 'product13', 'coast' => 100 ],
  ['title' => 'product14', 'coast' => 200 ],
  ['title' => 'product15', 'coast' => 300 ],
  ['title' => 'product16', 'coast' => 400 ],
  ['title' => 'product17', 'coast' => 500 ],
  ['title' => 'product18', 'coast' => 600 ],
  ['title' => 'product19', 'coast' => 700 ],
  ['title' => 'product21', 'coast' => 800 ],
  ['title' => 'product22', 'coast' => 900 ],
  ['title' => 'product23', 'coast' => 1000 ],
  ['title' => 'product24', 'coast' => 200 ],
  ['title' => 'product25', 'coast' => 300 ],
];

require './GetGoods.php';

echo $twig->render('main.tmpl', ['goods' => array_slice($goods, 0, 3)]);