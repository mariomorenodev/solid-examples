<?php

namespace Solid\Examples\PrincipioAbiertoCerrado;

final class Song implements Measurable
{
    private $length;
    private $sendLength;

    public function __construct(int $length, int $sendLength)
    {
        $this->length = $length;
        $this->sendLength = $sendLength;
    }

    public function getTotalLength(): int
    {
        return $this->length;
    }

    public function getSendLength(): int
    {
        return $this->sendLength;
    }

    public function getSentLengthPercentage(): float
    {
        return ($this->sendLength * 100) / $this->length;
    }
}
