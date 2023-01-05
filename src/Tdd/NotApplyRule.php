<?php

namespace FizzBuzz;

class NotApplyRule implements ReplaceRuleInterface
{
    public function replace(int $n, string $text): string
    {
        if(!$text) {
            return (string) $n;
        }

        return '';
    }
}