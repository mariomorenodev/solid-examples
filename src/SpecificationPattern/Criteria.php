<?php

namespace Solid\Examples\Criteria;

final class Criteria
{
    private array $filters = [];
    private array $orders = [];
    private int $offset = 0;
    private int $limit = 15;

    public function __construct(array $filters = [], array $orders = [], int $offset = 0, int $limit = 15)
    {
        $this->filters = $filters;
        $this->orders = $orders;
        $this->offset = $offset;
        $this->limit = $limit;
    }
}
