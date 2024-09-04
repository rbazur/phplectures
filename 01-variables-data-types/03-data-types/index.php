<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

//String
$name = 'Ryan Azur';
$name2 = "Alden Rye Azur";

//Display the value and the type of $name using var_dump
var_dump($name2);
echo '<br>';
echo '<br>';

//Display the type of $name using gettype
echo gettype($name);
echo '<br>';
echo '<br>';

//Echo both names
echo $name;
echo '<br>';
echo $name2;
echo '<br>';
echo '<br>';

//Integer
$age = 19;
echo $age;
echo '<br>';
var_dump($age);
echo '<br>';
echo '<br>';

//Float
$rating = 4.5;
var_dump($rating);
echo '<br>';
echo '<br>';

//Boolean
$is_loaded = true;
var_dump($is_loaded);
echo '<br>';
echo '<br>';

//Array
$friends = array('Jun', 'Neil', 'Christian');
var_dump($friends);
echo '<br>';
echo gettype($friends);
echo '<br>';
echo '<br>';

//Object - are created from a class
$person = new stdClass();
var_dump($person);
echo '<br>';
echo gettype($person);
echo '<br>';
echo '<br>';

//Null - theres just no value
$car = null;
var_dump($car);

echo '<br>';
echo '<br>';

//Resource
$file = fopen('sample.txt', 'r');
echo gettype($file); //resource