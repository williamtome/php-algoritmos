<?php

namespace Tests\Core\Algorithms;

use PHPUnit\Framework\TestCase;
use Core\Algorithms\LinearSearch;

class LinearSearchTest extends TestCase
{
    /**
     * @dataProvider numbers
     */
    public function testAttributes($array)
    {
        var_dump($array); die;
        $linearSearch = new LinearSearch($array);

        $this->assertEquals(
            $array,
            $linearSearch->getNumbers()
        );
    }

    public function testShouldReturnNumberFoundIndex()
    {
        $numbers = [10, 20, 80, 30, 60, 50, 110, 100, 130, 170];
        $numberToSearch = 110;
        $expectedIndex = 6;

        $linearSearch = new LinearSearch($numbers);
        $numberFound = $linearSearch->search($numberToSearch);

        $this->assertEquals($expectedIndex, $numberFound);
    }

    public function testShouldNotReturnNumberFoundIndex()
    {
        $numbers = [10, 20, 80, 30, 60, 50, 110, 100, 130, 170];
        $numberToSearch = 171;
        $expectedIndex = -1;

        $linearSearch = new LinearSearch($numbers);
        $numberFound = $linearSearch->search($numberToSearch);

        $this->assertEquals($expectedIndex, $numberFound);
    }

    public function numbers()
    {
        return [
            [10, 20, 80, 30, 60, 50, 110, 100, 130, 170],
        ];
    }
}