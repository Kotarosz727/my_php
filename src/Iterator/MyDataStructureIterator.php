<?php

class MyDataStructureIterator implements Iterator
{
	private $position = 0;

    function __construct(protected Traversable $iterator) {
        $this->position = 0;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    #[\ReturnTypeWillChange]
    public function current() {
        return $this->iterator[$this->position];
    }

    #[\ReturnTypeWillChange]
    public function key() {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function valid(): bool {
        return isset($this->iterator[$this->position]);
    }
}