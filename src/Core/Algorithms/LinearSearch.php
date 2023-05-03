<?php

namespace Core\Algorithms;

class LinearSearch
{
    public function __construct(
        private array $array
    ) {}

    public function getNumbers()
    {
        return $this->array;
    }

    public function search(int $number): int
    {
        foreach ($this->array as $index => $value) {
            if ($value == $number) {
                return $index;
            }
        }

        return -1;
    }
}