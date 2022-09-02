<?php

use Solid\Examples\PrincipioDeInversionDependencia\VideoCreator;
use Solid\Examples\PrincipioDeInversionDependencia\VideoRepository;
use Solid\Examples\PrincipioDeInversionDependencia\DomainEventPublisher;

require __DIR__ . '/../vendor/autoload.php';

echo "<h1>Dependency Inversion Principle</h1>";
echo "<br>";

$video = new VideoCreator();
$video->create('Ice and fire');
