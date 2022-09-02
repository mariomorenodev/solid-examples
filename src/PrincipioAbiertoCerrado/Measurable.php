<?php

namespace Solid\Examples\PrincipioAbiertoCerrado;

interface Measurable
{
    public function getTotalLength();
    public function getSendLength();
    public function getSentLengthPercentage();
}
