<?php

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**  @test */
    public function test_example()
    {
        $example = new Example();
        $this->assertSame('test', $example->test());
    }
}
