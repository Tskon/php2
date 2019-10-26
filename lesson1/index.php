<?php
include 'PriceTag.php';

$orangePriceTag = new PriceTag('orange', 20);
$applePriceTag = new PriceTag('apple', 10);

$orangePriceTag -> showInfo();
$applePriceTag -> showInfo();