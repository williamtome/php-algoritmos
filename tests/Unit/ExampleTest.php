<?php

namespace Tests\Unit;

use Core\Example;
use Mockery;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testShouldReturnTheTesteWord()
    {
        Mockery::mock(stdClass::class)
            ->shouldReceive('teste')
            ->andReturn(true);

        // $example = new Example;
        // $this->assertEquals('teste', $example->test());
    }
}