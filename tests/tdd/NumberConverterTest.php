<?php

// require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use FizzBuzz\NumberConverter;

class NumberConverterTest extends TestCase
{
    public function testConvert()
    {
        $converter = new NumberConverter();
        
        $this->assertEquals("1", $converter->convert(1));
        $this->assertEquals("2", $converter->convert(2));
        $this->assertEquals("Fizz", $converter->convert(3));
        $this->assertEquals("Buzz", $converter->convert(5));
        $this->assertEquals("FizzBuzz", $converter->convert(15));
        $this->assertEquals("Fizz", $converter->convert(6));
        $this->assertEquals("Buzz", $converter->convert(10));
        $this->assertEquals("FizzBuzz", $converter->convert(30));

        $this->expectException(OutOfRangeException::class);
        $this->assertEquals("0", $converter->convert(0));
    }
}