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

    <h2>Сотрудники компаний: </h2>

    <?php

    // Задание 1:
    
    echo "<h2>Задание 1</h2>";
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


    // Задание 2:
    
    echo "<h2>Задание 2</h2>";

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

    $companies = [];
    foreach ($employees as $employee) {
        $companyName = $employee['company'];
        if (!isset($companies[$companyName])) {
            $companies[$companyName] = [];
        }
        $companies[$companyName][] = $employee['name'];
    }


    echo "<ul>";
    foreach ($companies as $company => $employeesList) {
        echo "<li><strong>$company</strong>";
        echo "<ul>";
        foreach ($employeesList as $employeeName) {
            echo "<li>$employeeName</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";

    echo "<hr>";

    // Задание 3----------------------------------------------------------------------------------------------------:
    
    echo "<h2>Задание 3</h2>";

    $numbers = [1];

    for ($i = 1; $i < 10; $i++) {
        $previous = $numbers[$i - 1];

        $nextNumber = rand($previous + 1, $previous + 100);

        $numbers[] = $nextNumber;
    }

    echo "<p>" . implode(', ', $numbers) . "</p>";

    echo "<hr>";


    // Задание 4---------------------------------------------------------------------------------------------------:
    
    echo "<h2>Задание 4</h2>";

    $numbers = [
        [3.534534534545, 2],
        [100.5, 4],
        [1.2545, 2],
        [5.5486, 3],
        [8.78754, 0],
        [12.3456789, 4],
        [7.499999, 1],
        [99.9999, 2],
        [0.005, 2],
        [123.4567, 1]
    ];

    foreach ($numbers as $item) {
        $number = $item[0];
        $precision = $item[1];
        $rounded = round($number, $precision);

        echo "<p>" . number_format($number, 12, '.', '') . " rounded to $precision: $rounded</p>";
    }

    ?>



</body>

</html>