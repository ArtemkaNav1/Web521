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

    // Группируем сотрудников по компаниям
    $companies = [];
    foreach ($employees as $employee) {
        $companyName = $employee['company'];
        if (!isset($companies[$companyName])) {
            $companies[$companyName] = [];
        }
        $companies[$companyName][] = $employee['name'];
    }

    // Выводим сгруппированный список
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


    ?>
    
    
   
</body>

</html>