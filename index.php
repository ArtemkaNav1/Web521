<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        Использование filter:
        ● Задача: У вас есть массив строк. Используйте метод filter, чтобы
        отфильтровать строки, длина которых больше 5 символов.
        ● Пример: ['apple', 'banana', 'kiwi', 'grapefruit'] -> ['banana',
        'grapefruit']
    </h3>

    <?php
    $words = ['apple', 'banana', 'kiwi', 'grapefruit'];

    // filter
    $filtered = array_filter($words, fn($word) => strlen($word) > 5);

    print_r(array_values($filtered)); // сброс индексов
    ?>

</body>

</html>