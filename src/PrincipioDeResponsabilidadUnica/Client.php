<?php

namespace Solid\Examples\PrincipioDeResponsabilidadUnica;

final class Client
{
    public function getBookDescription(): string
    {
        $book = new Book('The Lord of the Rings', 'J.R.R. Tolkien', 295);
        $printer = new StandarOutputHtmlPrinter();

        return $printer->printDescription($book->getDescription());
    }
}
