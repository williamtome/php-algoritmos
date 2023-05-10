<?php

namespace Tests\Core\Algorithms;

use PHPUnit\Framework\TestCase;
use Core\Algorithms\LinearSearch;

class LinearSearchTest extends TestCase
{
    /**
     * @dataProvider numbers
     */
    public function testAttributes(array $numbers)
    {
        $linearSearch = new LinearSearch($numbers);

        $this->assertEquals(
            $numbers,
            $linearSearch->getNumbers()
        );
    }

    /**
     * @dataProvider numbers
     */
    public function testShouldReturnNumberFoundIndex(array $numbers)
    {
        $numberToSearch = 110;
        $expectedIndex = 6;

        $linearSearch = new LinearSearch($numbers);
        $numberFound = $linearSearch->search($numberToSearch);

        $this->assertEquals($expectedIndex, $numberFound);
    }

    /**
     * @dataProvider numbers
     */
    public function testShouldNotReturnNumberFoundIndex(array $numbers)
    {
        $numberToSearch = 171;
        $expectedIndex = -1;

        $linearSearch = new LinearSearch($numbers);
        $numberFound = $linearSearch->search($numberToSearch);

        $this->assertEquals($expectedIndex, $numberFound);
    }

    /**
     * @dataProvider numbers
     */
    public function testShouldReturnErrorMessageWhenNumberToSearchIsEmpty(array $numbers)
    {
        $this->expectExceptionMessage('É obrigatório fornecer o número a ser procurado.');
        $linearSearch = new LinearSearch($numbers);
        $linearSearch->search(null);
    }

    public static function numbers()
    {
        return [
            [
                [10, 20, 80, 30, 60, 50, 110, 100, 130, 170],
            ],
        ];
    }
}