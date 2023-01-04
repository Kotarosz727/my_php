<?php

class SingletonTrait
{
    private $instance = null;
    
    public static function getInstance()
    {
        $class = __CLASS__;

        if (!(self::$instance instanceof $class)) {
            self::$instance = new $class;
        }

        return self::$instance;
    }
}

class DBWriteConnection extends DB
{
    use SingletonTrait;

    private function __construct()
    {
        parent::__construct(APP_DB_WRITE_DSN, APP_DB_WRITE_USER, APP_DB_WRITE_PASSWORD);
    }
}

class DBReadConnection extends DB
{
    use SingletonTrait;

    private function __construct()
    {
        parent::__construct(APP_DB_READ_DSN, APP_DB_READ_USER, APP_DB_READ_PASSWORD);
    }
}