<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        7. Использование every:
        ● Задача: У вас есть массив чисел. Используйте метод every, чтобы
        проверить, все ли числа в массиве положительные.
        ● Пример: [1, 2, 3, 4] -> true
    </h3>

    <?php
    $numbers = [1, 2, 3, 4];

    $allPositive = array_reduce($numbers, fn($carry, $num) => $carry && $num > 0, true);

    var_export($allPositive);
    ?>

</body>

</html>