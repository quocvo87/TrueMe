<?php
namespace TrueMe\Foundation\Facade;

class StaticMe
{
    public static function __callStatic($method, $args)
    {
        $instance = static::getFacadeAccessor();

        if (! $instance) {
            throw new RuntimeException('A facade root has not been set.');
        }

        return $instance->$method(...$args);
    }
}