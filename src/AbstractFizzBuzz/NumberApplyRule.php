<?php

namespace AbstractFizzBuzz;

require_once 'RuleInterface.php';

class NumberApplyRule implements RuleInterface
{
    public function __construct(
        protected int $ruleNum, 
        protected string $text
    ){}

    public function match(string $text, int $targetNum): bool
    {
        return $targetNum % $this->ruleNum === 0;
    }

    public function apply(string $text, int $targetNum): string
    {
        return $this->text;
    }    
}