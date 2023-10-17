<?php
namespace TrueMe\Libraries;

class StaticMe
{
    public static function __callStatic($method, $args)
    {
        echo 'ddd';die;
        $instance = new static();

        if (! $instance) {
            throw new RuntimeException('A facade root has not been set.');
        }

        return $instance->$method(...$args);
    }
}