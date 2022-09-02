<?php

use Solid\Examples\PrincipioDeSustitucionLiskov\Rectangle;
use Solid\Examples\PrincipioDeSustitucionLiskov\Square;

require_once __DIR__ . '/../vendor/autoload.php';

echo '<h1>Liskov substitution principle</h1>';
echo "<br>";

$rectangle = new Rectangle(10, 5);
$square = new Square(10);

echo 'Area del rectángulo: ' . $rectangle->getArea();
echo "<br>";
echo 'Area del cuadrado: ' . $square->getArea();
