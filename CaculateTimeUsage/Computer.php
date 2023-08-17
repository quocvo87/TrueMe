<?php

class Computer {
    protected $mouse;
    protected $keyboard;

    public static $instance;

    public static function getInstance() {
        if ( !(self::$instance instanceof self) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function caculatorRam()
    {
        return true;
    }

    public function setMouse($value='')
    {
        $this->mouse = $value;
    }
}
