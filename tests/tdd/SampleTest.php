<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase 
{
    public function test() {
        $expected = 'hoge1';
        $this->assertEquals($expected, 'hoge');
    }
}