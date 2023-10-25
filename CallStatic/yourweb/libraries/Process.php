<?php
namespace YourWeb\Libraries;

class Process
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
