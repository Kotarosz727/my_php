<?php

class ExternalRegistry
{
    private array $store;

    public static function add(Object $object, string $name = null): ?Object
    {
        $name = (!is_null($name)) ?: get_class($object);
        $name = strtolower($name);

        $return = null;

        if(isset(self::$store[$name])) {
            $return = self::$store[$name];
        }

        self::$store[$name] = $object;
        return null;
    }

    public static function get(string $name): Object
    {
        if(!self::contain($name)) {
            throw new Exception("Object does not exist in registry");
        }

        return self::$store[$name];
    }

    public static function contain(string $name): bool
    {
        return isset(self::$store[$name]);
    }

    public static function remove(string $name): void
    {
        if(!self::contain($name)) {
            throw new Exception("Object does not exist in registry");
        }

        unset(self::$store[$name]);
    } 
}

//使い方例
$read = new DBReadConnection;
Registry::set($read);

$write = new DBWriteConnection;
Registry::set($write);

$read = Registry::get('DbReadConnection');
$write = Registry::get('DbWriteConnection');