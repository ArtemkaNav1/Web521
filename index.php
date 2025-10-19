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
    echo "<hr>";



    // Задание 5---------------------------------------------------------------------------------------------------:
    
    echo "<h2>Задание 5</h2>";

    $matrix = array_fill(0, 5, []);
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matrix[$i][$j] = rand(10, 100);
        }
    }

    $minInColumns = [];
    for ($col = 0; $col < 5; $col++) {
        $column = array_column($matrix, $col);
        $minInColumns[$col] = min($column);
    }

    echo "<div style='font-family: monospace;'>";
    foreach ($matrix as $row) {
        echo "<p style='margin: 5px;'>";
        $output = [];
        foreach ($row as $colIndex => $value) {
            if ($value == $minInColumns[$colIndex]) {
                $output[] = "<span style='color: red; font-weight: bold;'>$value</span>";
            } else {
                $output[] = $value;
            }
        }
        echo implode(", ", $output) . "</p>";
    }
    echo "</div>";

    $totalMin = array_sum($minInColumns);
    $averageMin = $totalMin / 5;

    echo "<p style='font-weight: bold; margin-top: 10px;'>Sum of the minimums: $totalMin</p>";
   

    ?>



</body>

</html>