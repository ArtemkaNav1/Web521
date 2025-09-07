<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        8. Анализ данных о продажах:
        ● Задача: У вас есть массив объектов, представляющих собой
        данные о продажах за месяц. Каждый объект содержит
        1информацию о дате продажи, названии товара и сумме продажи.
        Используйте методы map и reduce, чтобы рассчитать общую сумму
        продаж для каждого товара.
        ● Пример: [{date: '2023-10-01', item: 'apple', amount: 100},
        {date: '2023-10-02', item: 'banana', amount: 150}, ...]
    </h3>

    <?php
    $sales = [
        ['date' => '07-09-2025', 'item' => 'Хлеб', 'amount' => 100],
        ['date' => '07-09-2025', 'item' => 'Молоко', 'amount' => 150],
        ['date' => '07-09-2025', 'item' => 'Хлеб', 'amount' => 200],
        ['date' => '07-09-2025', 'item' => 'Яблоки', 'amount' => 75],
        ['date' => '07-09-2025', 'item' => 'Молоко', 'amount' => 125],
        ['date' => '07-09-2025', 'item' => 'Хлеб', 'amount' => 150],
        ['date' => '07-09-2025', 'item' => 'Яблоки', 'amount' => 100],
        ['date' => '07-09-2025', 'item' => 'Киви', 'amount' => 200],
        ['date' => '07-09-2025', 'item' => 'Молоко', 'amount' => 175],
        ['date' => '07-09-2025', 'item' => 'Хлеб', 'amount' => 120]
    ];

    $totals = array_reduce($sales, function ($carry, $sale) {
        $item = $sale['item'];
        if (!isset($carry[$item])) {
            $carry[$item] = 0;
        }
        $carry[$item] += $sale['amount'];
        return $carry;
    }, []);

    print_r($totals);
    ?>

</body>

</html>