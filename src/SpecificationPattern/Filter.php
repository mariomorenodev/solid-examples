<?php

namespace Solid\Examples\Criteria;

final class Filter
{
    private string $field;
    private string $operator;
    private string $value;

    public function __construct(string $field, string $operator, string $value)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;
    }
}
