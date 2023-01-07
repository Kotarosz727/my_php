<?php

require_once 'MyDataStructureIterator.php';
class MyDataStructure implements IteratorAggregate
{
    public function __construct(protected Traversable $internalData)
    {}
    public function getIterator(): Iterator
    {
        return new MyDataStructureIterator($this->internalData);
    }
}

$array = array(
    "firstElement",
    "secondElement",
    "lastElement",
);

$class = new MyDataStructure(new ArrayIterator($array));

foreach($class->getIterator() as $k => $v) {
    echo $k. PHP_EOL;
    echo $v. PHP_EOL;
}

$it = $class->getIterator();

while ($it->valid())
{
    echo $it->key() .' '.$it->current(). PHP_EOL;
    $it->next();
}
