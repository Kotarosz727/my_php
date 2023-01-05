<?php
namespace FizzBuzz;
class NumberConverter
{
    public function convert(int $n): string
    {
        if($n < 1) {
            throw new \OutOfRangeException("int must be grater than 0");
        }

        if($n%3 === 0 && $n%5 === 0) {
            return "FizzBuzz";
        }

        if($n%3 === 0) {
            return "Fizz";
        }

        if($n%5 === 0) {
            return "Buzz";
        }

        return (string) $n;
    }
}