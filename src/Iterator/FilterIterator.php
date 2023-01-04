<?php

class EvenFilterIterator extends FilterIterator
{
    public function accept()
    {
        $iterator = $this->getInnerIterator();

        $key = $iterator->key();

        if ($key % 2 == 0) {
            return true;
        }

        return false;
    }
}

$array = [
    0 => "Hello",
    1 => "Everybody Is",
    2 => "I'm",
    3 => "Amazing",
    4 => "The",
    5 => "Who",
    6 => "Doctor",
    7 => "Lives"
];

$filtered = new EvenfilterIterator(new ArrayIterator($array));

foreach ($filtered as $val) {
    echo $val. PHP_EOL;
}