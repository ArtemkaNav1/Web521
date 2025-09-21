<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        1. Конкатенация: вывод на страницу («Hello! My name
        is 'Name'»), где «Name» — это переменная, в которую
        вводится имя (выводится на странице в кавычках).
    </h3>

    <?php
    echo "1. " ;
    $name = "Артём"; //  Имя
    
    echo "Hello! My name is '" . $name . "'";
    ?>
</body>

</html>