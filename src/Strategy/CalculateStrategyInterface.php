<?php

interface CalculateStrategyInterface
{
    public function calculate(array $vars): int;
}