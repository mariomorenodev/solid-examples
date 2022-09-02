<?php

namespace Solid\Examples\PrincipioDeResponsabilidadUnica;

final class StandarOutPlainPrinter implements Printer
{
    public function printDescription(string $description): string
    {
        return $description;
    }
}
