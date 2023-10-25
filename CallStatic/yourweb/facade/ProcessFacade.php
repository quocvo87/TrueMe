<?php
namespace YourWeb\Facade;

use TrueMe\Foundation\Facade\StaticMe;

class ProcessFacade extends StaticMe
{
    public static function getFacadeAccessor()
    {
        return new \YourWeb\Libraries\Process;
    }
}

