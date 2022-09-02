<?php

require __DIR__ . '/../vendor/autoload.php';

use Solid\Examples\PrincipioDeSegregacionInterfaces\Lion;

echo '<h1>Segregation interface principle</h1>';
echo "<br>";
$lion = new Lion('Kamal');
echo $lion->getName();
echo "<br>";
echo $lion->swim('I can swim');
