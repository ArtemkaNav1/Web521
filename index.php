<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    </style>
</head>

<body>
    <h1>Задание 1</h1>
  <h2>Сотрудники компаний: </h2>

    <?php
    // Массив из 10 элементов
    $employees = [
        ['name' => 'Serhii', 'company' => 'Microsoft', 'position' => 'Developer'],
        ['name' => 'Oleh', 'company' => 'Apple', 'position' => 'QC Engineer'],
        ['name' => 'Olya', 'company' => 'Amazon', 'position' => 'Project Manager'],
        ['name' => 'Oksana', 'company' => 'ITStep', 'position' => 'Teacher'],
        ['name' => 'Andrii', 'company' => 'Apple', 'position' => 'Solution Architect'],
        ['name' => 'Ihor', 'company' => 'Samsung', 'position' => 'Engineer'],
        ['name' => 'Olesya', 'company' => 'Samsung', 'position' => 'Developer'],
        ['name' => 'Roman', 'company' => 'Microsoft', 'position' => 'Product Owner'],
        ['name' => 'Yura', 'company' => 'Microsoft', 'position' => 'QC Engineer'],
        ['name' => 'Iryna', 'company' => 'ITStep', 'position' => 'Teacher']
    ];

    
    foreach ($employees as $employee) {
        echo "<p>{$employee['name']}</strong> is working in {$employee['company']} on position: {$employee['position']}</p>";
    }
    echo "<hr>";
    ?>
</body>

</html>