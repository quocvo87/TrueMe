<?php

require __DIR__.'/vendor/autoload.php';

use TrueMe\Helpers\Sort;
use TrueMe\Helpers\NormalSort;


$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];


foreach ($customers as $customer) {
    Sort::getInstance()->orderBy('first_name')->select($customer)->desc();
}
echo '1. Sort first_name desc with Sort class';
echo '</br>'; 
var_dump(Sort::getInstance()->get());
echo '</br>';
echo '----------';
echo '</br>';

foreach ($customers as $customer) {
    NormalSort::getInstance()->orderBy('last_name')->select($customer);
}
echo '</br>';
echo '2. Sort last_name asc with NormalSort class';
echo '</br>'; 
var_dump(NormalSort::getInstance()->get());
echo '</br>';
echo '----------';
echo '</br>';
