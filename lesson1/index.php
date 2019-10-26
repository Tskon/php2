<?php
include 'PriceTag.php';

$orangePriceTag = new PriceTag('orange', 20);
$applePriceTag = new PriceTag('apple', 10);
$applePriceTagRus = new PriceTagRubles('apple', 700);

$orangePriceTag -> showInfo();
$applePriceTag -> showInfo();
$applePriceTagRus -> showInfo();