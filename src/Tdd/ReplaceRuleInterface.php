<?php

namespace FizzBuzz;

interface ReplaceRuleInterface
{
    public function replace(int $n, string $text): string;
}