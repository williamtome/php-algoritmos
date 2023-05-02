<?php

namespace Tests;

use Core\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testShouldReturnTheTesteWord()
    {
        $example = new Example;
        $this->assertEquals('teste', $example->test());
    }
}