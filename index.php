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
        <br>
        2. Добавить к заданию 1 фразу «I’m Age», где Age — это
        переменная с возрастом студента (выводится с новой
        строки).
    </h3>

    <?php
    echo "1. ";
    $name = "Артём"; //  Имя
    
    echo "Hello! My name is '" . $name . "'" . "<br>";
    ?>

    <?php
     echo "2. ";
    $name = "Артём";
    $age = 32;
    
    echo "Hello! My name is '" . $name . "'" . "<br>";
    echo "I'm $age";
    ?>
</body>

</html>