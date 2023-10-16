<?php

require __DIR__.'/vendor/autoload.php';

use TrueMe\Helpers\Sort;
use TrueMe\Helpers\NormalSort;


$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];

echo '-----------------------------------</br>';
echo 'Customers have not yet sort' . '</br>';
var_dump($customers);
echo '-----------------------------------</br>';

foreach ($customers as $customer) {
    Sort::getInstance()->orderBy('first_name')->select($customer)->desc();
}
echo '1. Loop element -> Sort first_name desc with Sort class';
echo '</br>'; 
var_dump(Sort::getInstance()->get());
echo '</br>';
echo '----------';
echo '</br>';

foreach ($customers as $customer) {
    NormalSort::getInstance()->orderBy('last_name')->select($customer);
}
echo '</br>';
echo '2. Loop element -> Sort last_name asc with NormalSort class';
echo '</br>'; 
var_dump(NormalSort::getInstance()->get());
echo '</br>';
echo '----------';
echo '</br>';


echo '</br>';
echo '3. Sort array -> Sort first_name asc with Sort class';
echo '</br>'; 
var_dump(Sort::getInstance()->orderBy('first_name')->select($customers)->asc()->get());
echo '</br>';
echo '----------';
echo '</br>';
