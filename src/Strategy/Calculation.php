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

$plus = new Calculation(new PlusStrategy());
$plus->execute([1, 1]);

$minus = new Calculation(new MinusStrategy());
$minus->execute([3, 1]);