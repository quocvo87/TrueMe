<?php
    include './Computer.php';

    echo '-------------------------------------------------' . '</br>';
    echo '|Case1 ----------------------------------------' . '</br>';
    echo '|__+ Initialize obj with NEW keyword--' . '</br>';
    echo '-----------------------------------------------' . '</br>';
    echo 'Step1---------';
    $m1 = memory_get_usage();
    echo $m1;
    echo '</br>';

    echo 'obj1: ------';
    $obj1 = new Computer();
    $obj1->setMouse('obj1');
    var_dump($obj1);
    echo '</br>';

    echo 'obj2: ------';
    $obj2 = new Computer();
    var_dump($obj2);


    echo 'Step2---------';
    $m2 = memory_get_usage();
    echo $m2;
    echo '</br>';

    echo '---------------';
    echo '</br>';
    echo 'Used: ' . ($m2-$m1);
    echo '</br>';
    echo '----------------------------------------' . '</br>';
    //clear all
    unset($m1, $m2, $obj1, $obj2);


    echo '</br></br></br>';
    echo '-------------------------------------------------' . '</br>';
    echo '|Case2 ----------------------------------------' . '</br>';
    echo '|__+ Initialize obj with getInstance()--' . '</br>';
    echo '-----------------------------------------------' . '</br>';
    echo 'Step1---------';
    $m3 = memory_get_usage();
    echo $m3;
    echo '</br>';

    echo 'obj1: ------';
    $obj1 = Computer::getInstance();
    var_dump($obj1);
    echo '</br>';

    echo 'obj2: ------';
    $obj2 = Computer::getInstance();
    $obj2->setMouse('obj2');
    var_dump($obj2);

    echo 'obj3: ------';
    $obj3 = Computer::getInstance();
    var_dump($obj3);

    echo 'Re-read obj1: ------';
    var_dump($obj1);


    echo 'Step2---------';
    $m4 = memory_get_usage();
    echo $m4;
    echo '</br>';

    echo '---------------';
    echo '</br>';
    echo 'Used: ' . ($m4-$m3);
    echo '</br>';
    echo '----------------------------------------' . '</br>';
    die;
