<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> Задача: У вас есть массив чисел. Используйте метод map, чтобы
        создать новый массив, в котором каждое число умножено на 2.
        ● Пример: [1, 2, 3, 4] -> [2, 4, 6, 8]
    </h3>

    <?php
    $numbers = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
    ];



    $doubled = array_map(fn($num) => $num * 2, $numbers);


    print_r($doubled);
    ?>
    <script src="script.js"></script>
</body>

</html>