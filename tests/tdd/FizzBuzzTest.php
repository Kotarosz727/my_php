<?php
use FizzBuzz\CyclicNumberRule;
use FizzBuzz\NumberConverter;
use PHPUnit\Framework\TestCase;
use FizzBuzz\NotApplyRule;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $rules = [
            new CyclicNumberRule(3, 'Fizz'),
            new CyclicNumberRule(5, 'Buzz'),
            new NotApplyRule(),
        ];
        
        $fizzBuzz = new NumberConverter($rules);

        $this->assertEquals('Fizz', $fizzBuzz->convert(3));
        $this->assertEquals('Buzz', $fizzBuzz->convert(5));
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(15));
        $this->assertEquals('1', $fizzBuzz->convert(1));
        $this->assertEquals('Fizz', $fizzBuzz->convert(6));
        $this->assertEquals('Buzz', $fizzBuzz->convert(10));
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(30));
    }
}