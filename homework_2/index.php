<?php

require './src/functions.php';

const BR = '<br>';

//Task 1
var_dump(task1(['str1', 'str2', 'str3', 'str4'], true));
echo BR;
task1(['str1', 'str2', 'str3', 'str4']);
echo BR;

//Task 2
task2('*', 6, 3, 'sfsdfsd', 2);
echo BR;
task2('/', 6, 3, 'sfsdfsd', 2);
echo BR;
task2('+', 6, 3, 'sfsdfsd', 2);
echo BR;
task2('-', 6, 3, 'sfsdfsd', 2);
echo BR . BR;

//Task 3
task3('abc', 23);
echo BR;
task3('sd', 'sds');
echo BR;
task3(7, 8);
echo BR;
task3(10, 9);
echo BR;
task3(0, 9);
echo BR;
task3(-20, -30);
echo BR;
task3(23, -30);

echo BR . BR;

//Task 4
task4();
echo BR;

//Task 5
task5();
echo BR . BR;
//Task 6
task6('test.txt');
echo BR.BR;
