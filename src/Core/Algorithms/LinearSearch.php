<?php

namespace Core\Algorithms;

use Exception;

class LinearSearch
{
    public function __construct(
        private array $array
    ) {}

    public function getNumbers()
    {
        return $this->array;
    }

    public function search(int|null|string $number): int
    {
        if (!isset($number)) {
            throw new Exception('É obrigatório fornecer o número a ser procurado.');
        }

        foreach ($this->array as $index => $value) {
            if ($value == $number) {
                return $index;
            }
        }

        return -1;
    }
}