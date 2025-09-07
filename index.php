<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>
        4. Использование forEach:
        ● Задача: У вас есть массив объектов, представляющих собой
        список студентов с их именами и возрастом. Используйте метод
        forEach, чтобы вывести в консоль имена всех студентов.
        ● Пример: [{name: 'Alice', age: 21}, {name: 'Bob', age: 22}] ->
        Alice, Bob
    </h3>

    <?php
    $students = [
        ['name' => 'Alice', 'age' => 21],
        ['name' => 'Bob', 'age' => 22],
    ];

    array_walk($students, fn($student) => print ($student['name'] . PHP_EOL));
    ?>
</body>

</html>