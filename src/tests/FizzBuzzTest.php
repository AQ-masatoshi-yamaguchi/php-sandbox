<?php

namespace tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_3の倍数で文字列Fizzを返す()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertSame('Fizz', $fizzbuzz->convert(3));
    }
}
