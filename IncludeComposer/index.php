<?php
require __DIR__.'/bootstrap/autoload.php';

use TrueMe\Http\Controllers\ComputerController;
$computer = new ComputerController();

use TrueMe\Libraries\DateSupport;
$date = new DateSupport();

var_dump($computer);
var_dump($date);