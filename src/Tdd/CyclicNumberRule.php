<?php

namespace FizzBuzz;

class CyclicNumberRule implements ReplaceRuleInterface
{
    public function __construct(
        protected int $ruleNum,
        protected string $replaced
    )
    {}
    public function replace(int $n, string $text): string
    {
        if ($n%$this->ruleNum === 0) {
            return $this->replaced;
        }

        return '';
    }
}