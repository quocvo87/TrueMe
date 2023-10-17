<?php
namespace TrueMe\Libraries;

use TrueMe\Libraries\StaticMe;

class Process extends StaticMe
{
    public $sum = null;

    public function sumAll($a='', $b = '')
    {
        $this->sum = $a + $b;

        echo 'a = ' . $a . '; ' . 'b =' . $b; echo '<br>';
        echo 'a + b =  ' . $this->sum; echo '<br>';

        return $this->sum;
    }

    public function FunctionName($value='')
    {
        echo 'FunctionName';
    }
}