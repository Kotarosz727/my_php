<?php

namespace AbstractFizzBuzz;

require_once 'NumberToStringConverter.php';
require_once 'NumberApplyRule.php';
require_once 'NoApplyRule.php';

$converter = new NumberToStringConverter(
    [
        new NumberApplyRule(3, 'Fizz'),
        new NumberApplyRule(5, 'Buzz'),
        new NoApplyRule()
    ]
);

echo $converter->execute(3). PHP_EOL;
echo $converter->execute(5). PHP_EOL;
echo $converter->execute(15). PHP_EOL;
echo $converter->execute(11). PHP_EOL;