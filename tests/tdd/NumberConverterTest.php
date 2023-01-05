<?php

// require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use FizzBuzz\NumberConverter;
use FizzBuzz\ReplaceRuleInterface;

class NumberConverterTest extends TestCase
{
    public function testConvertWithEmptyRules()
    {
        $converter = new NumberConverter([]);

        $this->assertEquals("", $converter->convert(1));
    }

    public function testConvertWithSingleRule()
    {
        $rule = $this->createReplaceRule(1, 'Replaced');

        $converter = new NumberConverter([$rule]);

        $this->assertEquals("Replaced", $converter->convert(1));
    }

    public function testConvertWithMultipleRules()
    {
        $rules = [
            $this->createReplaceRule(1, ''),
            $this->createReplaceRule(1, ''),
            $this->createReplaceRule(1, '1'),
        ];

        $converter = new NumberConverter($rules);

        $this->assertEquals("1", $converter->convert(1));
    }

    private function createReplaceRule(int $n, string $replaced): ReplaceRuleInterface
    {
        $rule = $rule = $this->createMock(ReplaceRuleInterface::class);
        
        $rule->expects($this->atLeastOnce())
            ->method('replace')
            ->with($n)
            ->willReturn($replaced);

        return $rule;    
    }
}