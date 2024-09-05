<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true; //1
$bool2 = false; //0
$null = null;

//Implicit conversion
$result = $number1 + $number2; //int 15
$result = $number1 + $number3; //int (string to int) int 25
$result = $number3 + $number3; //int (string to int) int 40
$result = $number1 . $number2; //int (string to int) string(3) "510"

// $result = $fruit + $number1; //error
$result = $number1 + $bool1; //int 6 (true to 1)
$result = $number1 + $bool2; //int 5 (false to 0)
$result = $number1 + $null; //int 5 (null to 0)

//Explicit conversion
$result = (string)$number1; //int to string
$result = (int)$number3; //string to int
$result = (bool)$number1; //int to bool


var_dump($result);
