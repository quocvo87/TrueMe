<?php
namespace TrueMe\Libraries;

class DateSupport {
    protected $currentDate;
    protected $currentDateTime;

    protected function getCurrentDate()
    {
        return $this->currentDate;
    }

    public function getCurrentDateTime()
    {
        return $this->currentDateTime;
    }
}
