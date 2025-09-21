<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Модуль 1</title>
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
        <br>
        3. В задание 3 из практических добавить вывод действий в таком формате: 'a'+'b'='rez', где a — это значение
        1-й переменной, b — это значение 2-й переменной,
        rez — результат операции между ними
        <br>
        4. Поменять 2 числа местами без использования 3-й переменной
        <br>
        5. Разработать php-страницу, в которой выбрать правильные html-элементы и вывести 3 вопроса в следующем формате:
        <br>
        a. 1 — вопрос с 4 вариантами ответа и только 1 из
        них правильный;
        b. 2 — вопрос с 4 вариантами ответа и может быть
        несколько правильных;
        c. 3 — вопрос с развернутым ответом
    </h3>

    <?php
    echo "<tr><td><b>Задание 1:</b><br>:";
    $name = "Артём"; //  Имя
    
    echo "Hello! My name is '" . $name . "'" . "<br>";

    echo "<tr><td><b>Задание 2:</b><br>:";
    $name = "Артём";
    $age = 32;

    echo "Hello! My name is '" . $name . "'" . "<br>";
    echo "I'm $age" . "<br>";

    echo "<tr><td><b>Задание 3:</b><br>";
    $a = 10;
    $b = 5;

    //Операции
    echo "'$a' + '$b' = '" . ($a + $b) . "'<br>";
    echo "'$a' - '$b' = '" . ($a - $b) . "'<br>";
    echo "'$a' * '$b' = '" . ($a * $b) . "'<br>";
    echo "'$a' / '$b' = '" . ($a / $b) . "'<br>";

    echo "<tr><td><b>Задание 4:</b><br>";

    $a = 2;
    $b = 10;
    echo "Было: первое число = $a, второе число = $b <br>";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "Стало: первое число = $a, второе число = $b<br/>" . "<br>";


    echo "<tr><td><b>Задание 5:</b><br>";


    echo '<form method="post">';
    echo '<br/><label>Язык программирования PHP нашел наиболее широкое применение в:<br/>';
    echo '<input type="radio" name="q1" value="design">Автоматизированном проектировании<br/>';
    echo '<input type="radio" name="q1" value="web">  Разработке web-приложений<br/>';
    echo '<input type="radio" name="q1" value="db">Создании и управлении базами данных<br/>';
    echo '</label>';
    echo '<br/><label>Какие из перечисленных конструкций НЕ используются для создания массива в PHP? <br/>';
    echo '<input type="checkbox" name="q2" value="ar">array(1, 2, 3)<br/>';
    echo '<input type="checkbox" name="q2" value="error_r">[1, 2, 3]<br/>';
    echo '<input type="checkbox" name="q2" value="right_q">(1, 2, 3)<br/>';
    echo '<input type="checkbox" name="q2" value="right_q">{1, 2, 3}<br/>';
    echo '</label>';
    echo '<br/><label>Что ты думаешь о PHP? </label><br/>';
    echo '<textarea name="q3" cols="40" rows="5"></textarea><br/>';
    echo '<input type="submit" value="Отправить">';
    echo '</form>';

    ?>
</body>

</html>