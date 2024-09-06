<?php
$output = null;

$user = [
    'name' => 'Juan',
    'email' => 'juan@gmail.com',
    'password' => 'secret',
    'hobbies' => ['Tennis', 'Video Games'],
];

// // Accessing elements
$output = $user['name'];
$output = $user['email'];

// // Element that does not exist
// $output = $user['gender']; // Throws an error

// // Accessing nested elements
$output = $user['hobbies'][1];

// // Adding a new element
$user['address'] = '123 Paghanapin Street';
$output = $user['address'];

// // Removing element
// unset($user['address']);
$output = $user['address']; // Will resolve to an error
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