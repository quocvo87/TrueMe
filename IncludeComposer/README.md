-----------------
|1. Introduction|
-----------------
Before years ago, if you want to use another .php file from current php file. You need to include/required before use it to avoid error: : "failed to open stream: No such file or directory". 
-----------------
    1.1 Example: you're staging on index.php you want to use calendar.php 
        |__include yourFolder/calendar.php

    1.2 With PSR4 of composer you don't need to manual include/required as before
-----------------

------------------
| 2. Step by step|
------------------

----------------------
    2.1 Clone/download IncludeComposer folder to your computer

    2.2 Goto IncludeComposer folder > D:\YourFolder\IncludeComposer

    2.3 Run composer: composer dumpautoload

    2.4 Run file:
        |__index.php -- auto include file with composer
        |__indexManualInclude.php -- manual include .php files
 
-----------------------

