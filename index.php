<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        10.Обработка данных о задачах:
        ● Задача: У вас есть массив объектов, представляющих собой
        список задач. Каждый объект содержит информацию о названии
        задачи, её статусе (выполнена или нет) и приоритете (высокий,
        средний, низкий). Используйте метод forEach, чтобы вывести в
        консоль все задачи с высоким приоритетом, которые еще не
        выполнены.
        ● Пример: [{task: 'Write report', status: 'completed', priority:
        'high'}, {task: 'Send email', status: 'pending', priority:
        'low'}, ...]
    </h3>

    <?php

    $tasks = [
        ['task' => 'Write report', 'status' => 'completed', 'priority' => 'high'],
        ['task' => 'Send email', 'status' => 'pending', 'priority' => 'low'],
        ['task' => 'Fix bug', 'status' => 'pending', 'priority' => 'high'],
    ];

    array_walk($tasks, function ($task) {
        if ($task['priority'] === 'high' && $task['status'] !== 'completed') {
            echo $task['task'] . PHP_EOL;
        }
    });
    ?>
</body>

</html>