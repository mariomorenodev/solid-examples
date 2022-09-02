<?php

namespace Solid\Examples\PrincipioDeResponsabilidadUnica;

final class Book
{
    private $title;
    private $author;
    private $pages;

    public function __construct(string $title, string $author, int $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPages(): int
    {
        return $this->pages;
    }

    public function getDescription(): string
    {
        return sprintf('%s by %s', $this->title, $this->author);
    }

    public function getCurrentPage(): string
    {
        return 'Current page: 1';
    }
}
