<?php

namespace Solid\Examples\PrincipioDeSegregacionInterfaces;

class Lion implements Swimmer, Speaker, Runner
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function swim(string $text): string
    {
        return $text;
    }

    public function speak(string $text): string
    {
        return $text;
    }

    public function run(string $text): string
    {
        return $text;
    }
}
