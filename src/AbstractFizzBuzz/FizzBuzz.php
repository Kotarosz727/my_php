<?php

class FizzBuzz {
    public function execute(int $n): string
    {
        if($n%15 === 0) {
            return 'FizzBuzz';
        } 
    
        if($n%5 === 0) {
            return 'Fizz';
        }
    
        if($n%3 === 0) {
            return 'Buzz';
        }
    
        return (string) $n;
    }
}

$fizzBuzz = new FizzBuzz();
echo $fizzBuzz->execute(30);