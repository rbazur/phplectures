<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output =  null;

$num1 = 20;
$num2 = 10;

//Basic arithmetic
$output = "$num1 + $num2 = " . $num1 + $num2; //30
$output = "$num1 - $num2 = " . $num1 - $num2; //10
$output = "$num1 * $num2 = " . $num1 * $num2; //200
$output = "$num1 / $num2 = " . $num1 / $num2; //2
$output = "$num1 % $num2 = " . $num1 % $num2; //0

//Appending Assignment operator
$num3 = 10; //10
// $num3 = $num3 + 20; //30
$num3 += 20; //30
$num3 -= 5; //25
$num3 *= 2; //50
$num3 /= 2; //25

$output = $num3;

//rand() - Generate a random number
$output = rand();
$output = rand(1, 100);

//round() - rounds a floating-point number
$output = round(4.5); //5

//ceil() - rounds a number UP to the nearest integer
$output = ceil(8.1); //9

//floor() - rounds a number DOWN to the nearest integet
$output = floor(8.99); //8

//sqrt()- returns the square root
$output = sqrt(64); //8

// max() - return the highest value in a list or array of argments
$output = max(1, 2, 3); //3

//min() - returns the lowest
$output = min([10, 20, 30]); //10

// number_format() - formats a number with grouped thousands
$output = number_format(1234567.891234, 2, '.', ',');

//https://www.php.net/manual/en/ref.math.php




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>