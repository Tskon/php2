<?php
require '../data.php';
$data = json_decode(file_get_contents('php://input'), true);
echo(json_encode(array_slice($goods, $data['offset'], 3)));
