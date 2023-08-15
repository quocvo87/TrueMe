<?php
namespace App\InjectionReflection\BaseClass;

class Laptop implements Computer
{
    public function run()
    {
        echo "This is Laptop....";
    }
}
