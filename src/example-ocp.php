<?php

require __DIR__ . '/../vendor/autoload.php';

use Solid\Examples\PrincipioAbiertoCerrado\Song;

echo '<h1>Open close principle</h1>';
echo '<br>';
$song = new Song(200, 100);
echo 'Total length  : ' . $song->getTotalLength();
echo '<br>';
echo 'Send length   : ' . $song->getSendLength();
echo '<br>';
echo 'Sent length %: ' . $song->getSentLengthPercentage() . '%';
