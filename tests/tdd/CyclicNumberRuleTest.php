<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\CyclicNumberRule;

class CyclicNumberRuleTest extends TestCase
{

    public function testReplace()
    {
        $class = new CyclicNumberRule(3, 'Fizz');

        $this->assertEquals('Fizz', $class->replace(3, ''));
        $this->assertEquals('Fizz', $class->replace(6, ''));
        $this->assertEquals('', $class->replace(7, ''));

        $class = new CyclicNumberRule(5, 'Buzz');

        $this->assertEquals('Buzz', $class->replace(5, ''));
        $this->assertEquals('Buzz', $class->replace(10, ''));
        $this->assertEquals('', $class->replace(7, ''));
    }
}