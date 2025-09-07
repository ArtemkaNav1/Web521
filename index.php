<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        6. Использование some:
        ● Задача: У вас есть массив чисел. Используйте метод some, чтобы
        проверить, содержит ли массив хотя бы одно четное число.
        ● Пример: [1, 3, 5, 7] -> false
    </h3>

    <?php
    $numbers = [1, 3, 5, 7];

    $hasEven = (bool) array_filter($numbers, fn($num) => $num % 2 === 0);

    var_export($hasEven);
    ?>
</body>

</html>