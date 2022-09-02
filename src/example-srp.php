<?php

require __DIR__ . '/../vendor/autoload.php';

use Solid\Examples\PrincipioDeResponsabilidadUnica\Client;

echo '<h1>Single responsibility principle</h1>';
echo '<br>';
$client = new Client();
// Book description : <b>The Lord of the Rings</b>
echo 'Book description : ' . $client->getBookDescription();
