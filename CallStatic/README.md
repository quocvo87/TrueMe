| 1. Introduction
----------------
Package will help you call all methods as static function

| 2. Directory Struct
-----------------------

    Root
    |__src/foundation - base source, you don't code here
    |__yourweb -> you implement your code here
    |   |__app -> application directory
    |   |__bootstrap
    |   |__config
    |   |   |__alias.php -> you put your alias here
    |   |
    |   |__libraries -> you put your helper class here
    |   |
    |   |__facade -> you put your facade class here
    |   |__index.php -> example call static method 
    |
    |__composer.json - define namespace

-----------------------


| 3. Step by step do it
-----------------------

    3.1 Clone/download CallStatic folder to your computer

    3.2 Goto CallStatic folder > D:\YourFolder\CallStatic

    3.3 Run composer: composer dumpautoload

    3.4 Run file D:\YourFolder\CallStatic\index.php for test
-----------------------

| 4. Guide implement call static
-----------------------

    4.1 You create new class, 
        example D:\YourFolder\CallStatic\yourweb\libraries\Process.php

    4.2 You have to create new facade corresponding
            D:\YourFolder\CallStatic\yourweb\facade\ProcessFacade.php and extends CallStatic class

    4.3 Register alias 
        at D:\YourFolder\CallStatic\yourweb\config\alias.php


    4.4 Run test file D:\YourFolder\CallStatic\yourweb\index.php
        for test, you will Process call static sumAll()
-----------------------

