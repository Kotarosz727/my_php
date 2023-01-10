<?php

class MinusStrategy implements CalculateStrategyInterface
{
    public function calculate(array $vars): int
    {
        return $vars[0] - $vars[1];
    }
}