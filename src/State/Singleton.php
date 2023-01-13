<?php

namespace State;

use function PHPUnit\Framework\isNull;

trait Singleton
{
    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if(isNull(self::$instance))
        {
            self::$instance = new self();
        }

        return self::$instance;    
    }
}