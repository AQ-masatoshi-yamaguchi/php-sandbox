<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
    public function convert(int $number): string | int
    {
        if($number % 3 === 0) {
            return 'Fizz';
        }

        return $number;
    }
}
