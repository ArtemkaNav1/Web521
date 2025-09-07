<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        9. Фильтрация данных о пользователях:
        ● Задача: У вас есть массив объектов, представляющих собой
        данные о пользователях. Каждый объект содержит информацию о
        возрасте, имени и статусе подписки (активна или нет).
        Используйте метод filter, чтобы получить список пользователей с
        активной подпиской и возрастом старше 30 лет.
        ● Пример: [{name: 'Alice', age: 28, isSubscribed: true}, {name:
        'Bob', age: 35, isSubscribed: false}, ...]
    </h3>

    <?php
    $users = [
        ['name' => 'Alice', 'age' => 28, 'isSubscribed' => true],
        ['name' => 'Bob', 'age' => 35, 'isSubscribed' => false],
        ['name' => 'Charlie', 'age' => 40, 'isSubscribed' => true],
    ];

    $filtered = array_filter($users, fn($user) => $user['isSubscribed'] && $user['age'] > 30);

    print_r(array_values($filtered));
    ?>
</body>

</html>