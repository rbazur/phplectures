<?php
$output = null;
$names = array('Juan', 'Maria', 'Ryan');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    // die();
}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo $names; //error
// echo $names[2];
// echo $names[1];

//Add element to an array
$numbers[] = 100;
$numbers[] = 101;

$numbers[3] = 200;

unset($numbers[3]); //this will remove the index 3

$numbers = array_values($numbers); //rearrange the index
inspect($numbers);
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
            <p class="text-xl">Intro to Arrays</p>
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>