<?php

require_once 'MyDataStructureIterator.php';
class MyDataStructure implements IteratorAggregate
{
    public function __construct(protected Traversable $internalData)
    {
        
    }
    public function getIterator(): Iterator
    {
        return new MyDataStructureIterator($this->internalData);
    }
}

$array = array(
    "firstelement",
    "secondelement",
    "lastelement",
);

$class = new MyDataStructure(new ArrayIterator($array));

foreach($class->getIterator() as $k => $v) {
    echo $k. PHP_EOL;
    echo $v. PHP_EOL;
}