<?php
namespace App\InjectionReflection\Controllers;

use App\InjectionReflection\BaseClass\Laptop;
use App\InjectionReflection\BaseClass\Desktop;

class DeveloperController
{
    protected $laptop;
    protected $desktop;

    public function __construct(Laptop $laptop, Desktop $desktop)
    {
        $this->laptop = $laptop;
        $this->desktop = $desktop;
    }

    public function work()
    {
        $this->laptop->run();
        echo '</br>';
        $this->desktop->run();
    }
}

