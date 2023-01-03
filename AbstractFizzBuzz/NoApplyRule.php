<?php

namespace AbstractFizzBuzz;

require_once 'RuleInterface.php';

class NoApplyRule implements RuleInterface
{

    public function match(string $text, int $targetNum): bool
    {
        return !$text;
    }     

    public function apply(string $text, int $targetNum): string
    {
        return (string) $targetNum;
    }
}