<?php

class Calculation 
{
    public function __construct(protected CalculateStrategyInterface $strategy)
    {}

    public function execute(array $vars): int
    {
        return $this->strategy->calculate($vars);
    }
}