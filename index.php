<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h3>
    Использование reduce: ● Задача: У вас есть массив чисел. Используйте метод
    reduce, чтобы найти сумму всех чисел в массиве. ● Пример: [1, 2, 3, 4] ->
    10
  </h3>
  <?php
  $numbers = [1, 2, 3, 4];

  // reduce
  $sum = array_reduce($numbers, fn($carry, $num) => $carry + $num, 0);

  echo $sum;
  ?>

</body>

</html>