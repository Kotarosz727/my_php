<?php

namespace AbstractFizzBuzz;

interface RuleInterface
{
    public function match(string $text, int $targetNum): bool;

    public function apply(string $text, int $targetNum): string;
}