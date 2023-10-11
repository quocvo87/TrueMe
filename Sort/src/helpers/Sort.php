<?php
namespace TrueMe\Helpers;

class Sort 
{
    protected $results = [];

    protected $sortOrder = [1,2,3];

    protected $isShow = true;

    protected $isAsc = SORT_ASC;

    protected $orderBy = '';

    protected static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function select($value=[])
    {
        if (!$value) return $this->results;

        if (!$this->orderBy) return $this->results;

        $this->results[] = $value;

        if (!isset($value[$this->orderBy])) return $this->results;

        return $this;
    }

    public function orderBy($key='')
    {
        if (!$key) return $this->results;
        $this->orderBy = $key;

        return $this;
    }

    public function asc()
    {
        $this->isAsc = SORT_ASC;

        return $this;
    }

    public function desc()
    {
        $this->isAsc = SORT_DESC;

        return $this;
    }

    public function get()
    {
        return $this->sort();
    }

    public function sort()
    {
        usort($this->results, $this);

        return $this->results;
    }

    public function __invoke($a, $b)
    {
        if ($this->isAsc == SORT_ASC) return $a[$this->orderBy] <=> $b[$this->orderBy];

        return $b[$this->orderBy] <=> $a[$this->orderBy];
    }
}
