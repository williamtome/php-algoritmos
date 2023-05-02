<?php

namespace Tests\Core\Algorithms;

use PHPUnit\Framework\TestCase;
use Core\Algorithms\LinearSearch;

class LinearSerchTest extends TestCase
{
    public function testShouldReturnNumberFoundIndex()
    {
        $numbers = [10, 20, 80, 30, 60, 50, 110, 100, 130, 170];
        $numberToSearch = 110;
        $expectedIndex = 6;

        $numberFound = new LinearSearch($numbers, $numberToSearch);

        $this->assertEquals($expectedIndex, $numberFound);
    }
}