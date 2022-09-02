<?php

namespace Solid\Examples\PrincipioDeResponsabilidadUnica;

final class StandarOutputHtmlPrinter implements Printer
{
    public function printDescription(string $description): string
    {
        return '<b>' . $description . '</b>';
    }
}
