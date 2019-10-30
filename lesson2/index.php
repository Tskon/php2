<style>body {font-family: monospace;}</style>

<?php
spl_autoload_register(function ($className) {
  include "$className.php";
});

$apple = new GoodByWeight('Яблоко', 5, 2, 'кг');
$tv = new Good('Телевизор', 2000, 1, 'шт');
$ipad = new DigitalGood('IPad', 1000, 1, 'шт');

$apple->getPriceTag();
$tv->getPriceTag();
$ipad->getPriceTag();