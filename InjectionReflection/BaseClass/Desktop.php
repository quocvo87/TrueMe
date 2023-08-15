<?php
namespace App\InjectionReflection\BaseClass;

class Desktop implements Computer
{
    public function run()
    {
        echo "This is Desktop";
    }
}
